<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno;
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel = "stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel = "stylesheet" href="strona-glowna.css" type="text/css"/>
    <title>Wirtualna Biblioteka</title>
    <meta name="description" content="Strona o książkach">
    <meta name="keywords" content="książki">
    <meta name="author" content="Karolina Rojowska">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <nav class="navbar navbar-dark bg-jumpers navbar-expand-md mb-4">
        <a class="navbar-brand" href="#"><img src="img/clipart3.png" width="30" height="30" alt="" class="d-inline-block mr-1 align-bottom"> wb.pl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expended="false" aria-label="przelacznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="main.php"> Strona główna </a>
                </li>
                <!--                    <li class="nav-item dropdown">-->
                <!--                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expended="false" id="submenu" aria-haspopup="true"> Zawody </a>-->
                <!--                        <div class="dropdown-menu" aria-labelledby="submenu">-->
                <!--                            <a class="dropdown-item" href="#"> Terminarz zawodow </a>-->
                <!--                            <a class="dropdown-item" href="#"> Ranking </a>-->
                <!--                            <a class="dropdown-item" href="#"> Sylwetki </a>-->
                <!--                            <a class="dropdown-item" href="#"> skocznie </a>-->
                <!--                        </div>-->
                <!--                    </li>-->
                <li class="nav-item">
                    <a class="nav-link active" href="moje-konto.php"> Moje konto </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="godziny-otwarcia.php"> Godziny otwarcia </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="o-bibliotece.php"> O bibliotece </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="zasoby.php"> Zasoby </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php"> Kontakt </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"> Wyloguj się </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <?php
    $sql = "SELECT idksiazki, datawypozyczenia,  datazwrotu  FROM wypozyczenia ORDER BY id";

    echo '<table cellspacing="5" cellpadding="5" style="border: 3px solid white; text-align: center"; align="center";>
        <tr style="background-color: #2CBFA4">
            <td style="border: 3px solid white;">Id książki</td>
            <td style="border: 3px solid white;">Data wypożyczenia</td>
            <td style="border: 3px solid white;">Data zwrotu</td>
        </tr>';

    if ($result = $polaczenie->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $idksiazki = $row["idksiazki"];
            $datawypozyczenia = $row["datawypozyczenia"];
            $datazwrotu = $row["datazwrotu"];

            echo '<tr>
            <td style="border: 3px solid white;">' . $idksiazki . '</td>
            <td style="border: 3px solid white;">' . $datawypozyczenia . '</td>
            <td style="border: 3px solid white;">' . $datazwrotu . '</td>
        </tr>';
        }
        $result->free();
    }

    ?>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>