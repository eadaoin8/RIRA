document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer1 = document.getElementById('audioPlayer1');
  //const audioPlayer2 = document.getElementById('audioPlayer2');
  const question1 = document.getElementById('question1');
  //const question2 = document.getElementById('question2');
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
        answer = formData.get('answer');
      
        // Database connection details
        const host = 'localhost';
        const username = 'root';
        const password = '';  // (Change this to actual password)
        const database = 'RIRA';
      
        // Connect database
        const conn = mysqli_connect(host, username, password, database);
      
        // Check connection
        if (!conn) {
          console.error('Failed to connect to database');
          return;
        }
        
        // Create SQL query to insert data
        $sql = `INSERT INTO responses (answer) VALUES ('$answer')`;
      
        if (mysqli_query($conn, $sql)) {
          document.write('<center><h3>New record created successfully!');
          }
          else {
          document.write('Error');
          }
      
        // Close the connection
        mysqli_close(conn);

        // Reset for next question
        e.target.reset();
        question1.classList.add('hidden');
        hasListenedEnough = false;
        audioPlayer1.currentTime = 0;
    });
});
