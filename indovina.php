<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indovina</title>
</head>
<body>
    <?php
        if (!isset($_SESSION)) {
            $_SESSION['tentativi'] = 1;
            $_SESSION['vittorie'] = 0;
        } else if(empty($_SESSION)){
            $_SESSION['tentativi'] = 1;
            $_SESSION['vittorie'] = 0;    
        } else {
            $_SESSION['tentativi'] += 1;
        }
        $_SESSION['randNum'] = rand(1,20);
       $userNum = $_GET['num'];
       echo "Il numero era : ".$_SESSION['randNum']."";
       if ($_SESSION['randNum'] == $userNum) {
            echo "<br>Hai Indovinato!";
            echo "<br>Numero Tentativi : " .$_SESSION['tentativi'];
            $_SESSION['vittorie'] += 1; 
            $_SESSION['tentativi'] = 0;   
       } else {
            echo "<br>Ritenta";
            echo "<br>Numero Tentativi : " .$_SESSION['tentativi'];
       }
       echo "<br>Numero di Vittorie : " . $_SESSION['vittorie'];
       
    ?>
    <br><a href="./scelta.html">Torna Indietro</a>
</body>
</html>