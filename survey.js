const ul_1 = document.querySelector(".option");

const question1 = document.querySelector(".question1");

const survey = document.querySelector(".survey");
const end = document.querySelector(".end");

//first question
ul_1.addEventListener("click", function() {
  question1.style.display = "none";
})

document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer1 = document.getElementById('audioPlayer1');
  const question1 = document.getElementById('question1');
  let hasListenedEnough = false;

    // user has listened for at least 5 seconds
    audioPlayer1.addEventListener('timeupdate', () => {
        if (audioPlayer1.currentTime >= 5 && !hasListenedEnough) {
            hasListenedEnough = true;
            question1.classList.remove('hidden');
        }
    });

    document.getElementById('surveyForm').addEventListener('Submit', (e) => {
        e.preventDefault();
      
        const formData = new FormData(e.target);
        const answer = formData.get('answer');

        fetch('survey.php', {
          method: 'POST',
          body: new URLSearchParams({answer: answer})
        })
        .then(response => response.text())
        .then(data => {
          console.log(data); // View response from process.php (e.g., success message)
        })
        .catch(error => console.error(error));

        // Reset for next question
        e.target.reset();
        question1.classList.add('hidden');
        hasListenedEnough = false;
        audioPlayer1.currentTime = 0;
    });
});

