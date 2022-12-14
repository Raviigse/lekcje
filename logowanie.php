<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <header>
        strona logowania
</header>
<form method="post" action="#">
    <label for="login">podaj login</login>
    <input type="text" name="login" id="login">
    <br>
    <label for="pass">Podaj Hasło</label>
    <input type="password" name="pass" id="pass">
    <br>
    <label for="pass2">Powtorz Hasło</label>
    <input type="password" name="pass2" id="pass2">
    <br>
    <input type="submit">
</form>
    <?php
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $pass2=$_POST['pass2'];
        echo "<p>$login,$pass,$pass2</p>";
    ?>

    <footer>
strone wykonał pan przemek
</footer>

</body>
</html>