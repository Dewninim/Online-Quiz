const express = require('express');
const bodyParser = require('body-parser');
const PDFDocument = require('pdfkit');
const fs = require('fs');

const app = express();
const PORT = 3000;
const IP_ADDRESS = '16.171.168.181';

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

let questionStore = [];

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

app.post('/addQuestion', (req, res) => {
  const question = {
    question: req.body.question,
    subject: req.body.subject,
    topic: req.body.topic,
    difficulty: req.body.difficulty,
    marks: parseInt(req.body.marks),
  };

  questionStore.push(question);
  res.redirect('/');
});

app.get('/getQuestions', (req, res) => {
    res.setHeader('Content-Type', 'application/json');
    res.send(JSON.stringify(questionStore));
  });

app.get('/generateQuestionPaper', (req, res) => {
  const totalMarks = 100; // Adjust as needed
  const distribution = {
    easy: 0.2,
    medium: 0.5,
    hard: 0.3,
  };

  
  

  const questionPaper = generateQuestionPaper(totalMarks, distribution);

  res.setHeader('Content-Type', 'application/pdf');
  res.setHeader('Content-Disposition', 'attachment; filename=questionPaper.pdf');
  
  const doc = new PDFDocument();
  doc.pipe(res);

  questionPaper.forEach((question, index) => {
    doc.fontSize(14).text(`Question ${index + 1}: ${question.question}`, { align: 'left' });
    doc.fontSize(12).text(`Subject: ${question.subject}`, { align: 'left' });
    doc.fontSize(12).text(`Topic: ${question.topic}`, { align: 'left' });
    doc.fontSize(12).text(`Difficulty: ${question.difficulty}`, { align: 'left' });
    doc.fontSize(12).text(`Marks: ${question.marks}`, { align: 'left' });
    doc.moveDown();
  });

  doc.end();
});

function generateQuestionPaper(totalMarks, distribution) {
  const questionPaper = [];

  for (const difficulty in distribution) {
    const count = Math.floor(totalMarks * distribution[difficulty]);
    const questions = getQuestionsByDifficulty(difficulty, count);
    questionPaper.push(...questions);
  }

  return questionPaper;
}

function getQuestionsByDifficulty(difficulty, count) {
  const filteredQuestions = questionStore.filter(
    (question) => question.difficulty.toLowerCase() === difficulty
  );

  if (filteredQuestions.length <= count) {
    return filteredQuestions;
  }

  return filteredQuestions.slice(0, count);
}

app.listen(PORT, () => {
  console.log(`Server is running on ${IP_ADDRESS}${PORT}`);
});

