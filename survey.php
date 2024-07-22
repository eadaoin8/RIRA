<html>
<?php
require 'db.php';
session_start();
?>
<head>
    <title>Survey</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suirbhé Ceoil</title>
    <link href="../RIRA/survey.css" rel="stylesheet" type="text/css"/>
</head>
<script src="../RIRA/survey.js"></script>
<body>
    <div class="container">
        <h1>Suirbhé Ceoil</h1>
        <p>Cliceáil ar an gcnaipe SEINN le do thoil chun éisteacht leis an amhrán, ansin freagair an cheist a leanann. Caithfidh tú éisteacht le 5 shoicind ar a laghad den cheol sula dtugann tú freagra</p>
        
        <audio id="audioPlayer1" controls>
            <source src="../On Taobh Tuathail Amach.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div id="question1" class="hidden">
            <p><strong>Cad a cheapann tú faoin amhrán</strong></p>
            <form id="surveyForm">
                <input type="radio" id="like" name="answer" value="like">
                <label for="like">Is maith liom é</label><br>
                <input type="radio" id="love" name="answer" value="love">
                <label for="love">Is breá liom é!</label><br>
                <input type="radio" id="dontlike" name="answer" value="dontlike">
                <label for="dontlike">Ní maith liom é</label><br>
                <input type="radio" id="hate" name="answer" value="hate">
                <label for="hate">Is fuath liom é!</label><br>
                <input type="radio" id="sick" name="answer" value="sick">
                <label for="sick">Táim bréan de</label><br><br>
                <input type="Submit" value="Submit">
            </form>
        </div>
        <?php
        $answer = $_POST['answer'];

        // Create SQL query to insert data
        $sql = "INSERT INTO responses (answer) VALUES ('$answer')";

        if (mysqli_query($conn, $sql)) {
            echo "Answer submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>   
</body>
</html>

<! ––

SELECT r.answer,
COUNT(*) AS count FROM responses r join Songs 
WHERE s.ID = 1
GROUP BY r.answer
ORDER BY r.answer;

––>
