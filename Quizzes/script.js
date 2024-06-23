// get the search bar
const input = document.querySelector('input');

// get the button
const button = document.querySelector('button');

// set event listener
button.addEventListener('click', () => {
  // run ajax request
  fetch('http://192.168.8.178' + input.value)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json(); // Assuming the response is in JSON format
    })
    .then(data => {
      // Handle the data returned from the server
      console.log(data);
    })
    .catch(error => {
      console.error('There was a problem with your fetch operation:', error);
    });
});
