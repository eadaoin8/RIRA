document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer1 = document.getElementById('audioPlayer1');
  const question1 = document.getElementById('question1');
  let hasListenedEnough = false;

  audioPlayer1.muted = true;
  audioPlayer1.play();
  
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
        answer = formData.get('answer');

        fetch('surv1.php', {
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
        $answer = $_POST['answer'];
    });

    audioPlayer1.addEventListener('error', () => {
      console.error('Error loading audio');
      // Display error message to user
  });
});

