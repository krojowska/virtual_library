<?php
    session_start();
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: main.php');
        exit();
    }
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv=X-UA-Compatible" content="IE=edge, chrome=1"/>
    <link rel = "stylesheet" href="style-logowanie.css" type="text/css"/>
    <title>Wirtualna Biblioteka</title>
</head>

<body>
<h1>Witaj w <span style="color: #2CBFA4;">Wirtualnej Bibliotece</span></h1>
    <br/><br/><br/>
    <form action="logging.php" method="post">
        E-mail: <br/> <input type="text" name="email"/> <br/><br/>
        Hasło: <br/> <input type="password" name="haslo"/> <br/><br/><br/>
        <input class="btn" type="submit" value="Zaloguj sie"/> <br/><br/><br/><br/>
        Nie masz jeszcze konta? <a href="rejestracja.php">Zarejestruj się!</a>

    </form>
    <?php
    if(isset($_SESSION['blad']))
        {
            echo $_SESSION['blad'];
        }
    ?>
</body>

</html>
