<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
</head>

<body>
    <form method="POST">
        <label for='passwordLength'>Lengte van wachtwoord:</label>
        <input type="number" name="passwordLength" min="6" max="100"><br>
        <input type="radio" name="tokens" value="True">
        <label for="male">Wel speciale tekens</label><br>
        <input type="radio" name="tokens" value="False">
        <label for="female">Geen speciale tekens</label><br>
        <input type='submit' value='Maak wachtwoord'>
    </form>
</body>

</html>
<?php
    $useSpecials = $_POST['tokens'];
    $passwordLength = $_POST['passwordLength'];
    function randomLetter(){
        if($useSpecials == true){
            $int = rand(0,73);
            $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012$";
            $letter = $letters[$int];
            return $letter;
        }else{
            $int = rand(0,61);
            $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012$";
            $letter = $letters[$int];
            return $letter;
        }
    }
    for($i = 1; $i <= $passwordLength; $i++){
        echo randomLetter();
    }
?>