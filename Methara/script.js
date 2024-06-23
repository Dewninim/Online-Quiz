const questions = [
    {
        question: " What is the most used Google technology?" ,
        answers: [
            {text:"Google Search", correct: false},
            {text:"Google Maps", correct: true},
            {text:"Google Weather", correct: false},
            {text:"Google Search", correct: false},
        ]
    },
    {
        question: "Newton is said to have been inspired by what to describe the theory of gravity?" ,
        answers: [
            {text:"Ladder", correct: false},
            {text:"Hailstone", correct: false},
            {text:"Apple", correct: true},
            {text:"Rock", correct: false},
        ]
    },
    {
        question: " Which is not a part of a computer? " ,
        answers: [
            {text:"Mouse ", correct: false},
            {text:"Rat", correct: true},
            {text:"CPU", correct: false},
            {text:"Keyboard", correct: false},
        ]
    },
    {
        question: " Which fruit is also the name of a computer brand? " ,
        answers: [
            {text:"Apple", correct: true},
            {text:"Grapes", correct: false},
            {text:"Mango", correct: false},
            {text:"Lemon", correct: false},
        ]
    }
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAnswer);
    });
}


function resetState(){
    nextButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `You Scored ${score} out of ${questions.
        length}!`;
        nextButton.innerHTML = "Play Again";
        nextButton.style.display = "block";
}



function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
}

nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});


startQuiz();