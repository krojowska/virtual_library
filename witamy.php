<?php
session_start();
if((!isset($_SESSION['udanarejestracja'])))
{
    header('Location: index.php');
    exit();
}
else {
    unset($_SESSION['udanarejestracja']);
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
<h1>Witaj w <span style="color: #2CBFA4;">Wirtualnej Bibliotece</span></h1><br/>
Dziękujemy za rejestrację w serwisie!<br/><br/>
<a href="index.php">Zaloguj się na swoje konto</a>
<br /><br/>
</body>
</html>
