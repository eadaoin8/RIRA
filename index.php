<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suirbhé Ceoil</title>
    <link rel="stylesheet" href="survey.css">
</head>
<script src="survey.js"></script>
<body>
    <div class="survey">
        <h1>Suirbhé Ceoil</h1>
        <p>Cliceáil ar an gcnaipe SEINN le do thoil chun éisteacht leis an amhrán, ansin freagair an cheist a leanann. Caithfidh tú éisteacht le 5 shoicind ar a laghad den cheol sula dtugann tú freagra</p>
        
        <audio id="audioPlayer1" controls>
            <source src="/Users/eadaoinosnodaigh/Downloads/On Taobh Tuathail Amach.mp3" type="audio/mpeg">
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

        <div class="question2">
            <h3>How long have you been coding?</h3> 
            <ul class="option">
                <li>Just Started</li>
                <li>3-6 months</li>
                <li>6-12 months</li>
                <li>1-2 years</li>
            </ul>
        </div>
    

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
