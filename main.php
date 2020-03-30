<?php
    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
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
        <nav class="navbar navbar-dark bg-jumpers navbar-expand-md">
            <a class="navbar-brand" href="#"><img src="img/clipart3.png" width="30" height="30" alt="" class="d-inline-block mr-1 align-bottom"> wb.pl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expended="false" aria-label="przelacznik nawigacji">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.php"> Strona główna </a>
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
                        <a class="nav-link" href="moje-konto.php"> Moje konto </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Godziny otwarcia </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> O bibliotece </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="zasoby.php"> Zasoby </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Kontakt </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"> Wyloguj się </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<main>

    <section class="jumpers">

        <div class="container">

            <header>

                <h1>Wirtualna Biblioteka</h1>
                <blockquote class="blockquote">
                    Każda znajdująca się tu książka, każdy tom, posiadają własną duszę. I to zarówno duszę tego, kto daną książkę napisał, jak i dusze tych, którzy tę książkę przeczytali i tak mocno ją przeżyli, że zawładnęła ich wyobraźnią.
                    <footer class="blockquote-footer">Carlos Ruiz Zafón</footer>
                </blockquote>
                <blockquote class="blockquote">
                    Przyzwyczaić się do czytania książek - to zbudować sobie schron przed większością przykrości życia codziennego.
                    <footer class="blockquote-footer">William Somerset Maugham</footer>
                </blockquote>

            </header>

            <div class="row">

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="wpis.php"><img src="img/mroz.jpg" alt="Remigiusz Mróz"></a>
                        <figcaption>Remigiusz Mróz</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/drzwi.jpg" alt="B.A. Paris"></a>
                        <figcaption>B.A. Paris</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/king.jpg" alt="Stephen King"></a>
                        <figcaption>Stephen King</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/tron.jpg" alt="George R. R. Martin"></a>
                        <figcaption>George R. R. Martin</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/riochan.jpg" alt="Rick Riochan""></a>
                        <figcaption>Rick Riochan</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/roth.jpg" alt="Veronica Roth"></a>
                        <figcaption>Veronica Roth</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/potter.jpg" alt="J.K. Rowling"></a>
                        <figcaption>J.K. Rowling</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/latarnik.jpg" alt="Camilla Lackberg"></a>
                        <figcaption>Camilla Lackberg</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/dziewczyna.jpg" alt="Paula Hawkins"></a>
                        <figcaption>Paula Hawkins</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/wiedzmin.jpg" alt="Andrzej Sapkowski"></a>
                        <figcaption>Andrzej Sapkowski</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/coben.jpg" alt="Harlan Coben"></a>
                        <figcaption>Harlan Coben</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/bonda.jpg" alt="Katarzyna Bonda"></a>
                        <figcaption>Katarzyna Bonda</figcaption>
                    </figure>

                </div>
            </div>

        </div>

    </section>

</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>