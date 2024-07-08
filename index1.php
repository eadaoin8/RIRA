<html>
<?php
if(isset($_POST['username'] && isset($_POST['password']))){
    $username = $_POST['root'];
    $password = $_POST[''];
    $like = $_POST['like'];
    $love = $_POST['love'];
    $dontlike = $_POST['dontlike'];
    $hate = $_POST['hate'];
    $sick = $_POST['sick'];
    if(!isset($fmsg)){
        $sql = "INSERT INTO responses(answers) VALUES ('$answer')";
        if(mysqli_query($conn, $sql)){
            echo "successfully";
        }
        else{
            echo "error";
        }
        mysqli_close($conn);
    }
}
?>

<head>
<meta name="robots" content="noindex" />
</head>

<div class="container">
<form class="form-signin" method="POST">
<?php if(isset($smsg)){ ?><div role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h1>Suirbhé Ceoil</h1>
        <p>Cliceáil ar an gcnaipe SEINN le do thoil chun éisteacht leis an amhrán, ansin freagair an cheist a leanann. Caithfidh tú éisteacht le 5 shoicind ar a laghad den cheol sula dtugann tú freagra</p>
        
        <audio id="audioPlayer1" controls>
            <source src="/Users/eadaoinosnodaigh/Downloads/On Taobh Tuathail Amach.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="input-group">
        <span>Password:</span>
        <input type="password" name="Password" id="inputPassword" placeholder="Password"
        required>
        </div>
        <div class="input-group">
        <label for="Confirm" class="sr-only">Confirm Password:</label>
        <input type="password" name="Confirm" id="Confirm" placeholder="Confirm Password"
        required>
        </div>

        <div class="input-group">
        <span>Username:</span>
        <input type="text" name="Username" placeholder="Username" required>
        <label for="Confirm" class="sr-only">Confirm Password:</label>
        <input type="password" name="Confirm" id="Confirm" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
        </form>
        </div>



        
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
</div>
</body>
</html>