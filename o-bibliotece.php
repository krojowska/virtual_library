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
    <meta name="description" content="Blog o skokach narciarskich">
    <meta name="keywords" content="skoki narciarskie, skoczkowie, wyniki">
    <meta name="author" content="Jan Kowalski">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <nav class="navbar navbar-dark bg-jumpers navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="30" height="30" alt="" class="d-inline-block mr-1 align-bottom"> wb.pl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expended="false" aria-label="przelacznik nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="main.php"> Strona główna </a>
                </li>
                <!--                <li class="nav-item dropdown">-->
                <!--                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expended="false" id="submenu" aria-haspopup="true"> Zawody </a>-->
                <!--                    <div class="dropdown-menu" aria-labelledby="submenu">-->
                <!--                        <a class="dropdown-item" href="#"> Terminarz zawodow </a>-->
                <!--                        <a class="dropdown-item" href="#"> Ranking </a>-->
                <!--                        <a class="dropdown-item" href="#"> Sylwetki </a>-->
                <!--                        <a class="dropdown-item" href="#"> skocznie </a>-->
                <!--                    </div>-->
                <!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="opinie.php"> Opinie </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="godziny-otwarcia.php"> Godziny otwarcia </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="o-bibliotece.php"> O bibliotece </a>
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
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-white text-dark wpis mt-4">
                    <header><h1 class="h2 font-weight-bold text-uppercase ml-0 mb-4 text-center text-md-left">Biblioteka Główna AGH</h1></header>
                    <p>Biblioteka Główna Akademii Górniczo-Hutniczej jest jednostką ogólnouczelnianą o zadaniach usługowych, dydaktycznych i naukowych.</p>

                    <p>Pełni funkcje ośrodka informacji naukowej, a wraz z bibliotekami wydziałowymi tworzy jednolity system biblioteczno-informacyjny.</p>
                    <p>Pod względem wielkości zbiorów jest drugą, po Bibliotece Jagiellońskiej, biblioteką Krakowa. Ponadto Biblioteka odgrywa wiodącą rolę w Krakowskim Zespole Bibliotecznym.</p>
                    <img class="img-thumbnail mb-3 d-block mx-auto" src="img/agh.jpg" alt="remek2">

                    <h2 class="h3 font-weight-bold mb-4">Z historii</h2>

                    <p>Biblioteka Główna Akademii Górniczo-Hutniczej jest największą biblioteką techniczną w Krakowie i jedną z największych w Polsce. Jej dzieje związane są z historią i etapami rozwoju Uczelni. Uroczystej inauguracji ówczesnej Akademii Górniczej dokonał Naczelnik Państwa Marszałek Józef Piłsudski 20 października 1919 roku.</p>

                    <p>Biblioteka powstała w roku akademickim 1921/22 powołana przez Senacką Komisję Biblioteczną. Początkowo mieściła się w budynku przy ul. Loretańskiej 18, następnie ul. Smoleńsk 7. W 1929 roku zbiory zostały przeniesione do pomieszczenia w nowo powstałym gmachu Akademii Górniczej przy al. Mickiewicza 30.</p>
                    <img class="img-thumbnail float-left mr-3 mt-2" src="img/biblioteka-historia.jpg" alt="remek">

                    <p>Księgozbiór zapoczątkowały dary od wielu osób prywatnych, głównie profesorów Akademii, instytucji w kraju i za granicą; m.in. Maria Skłodowska-Curie, działając w ramach Komitetu Współpracy Intelektualnej Ligii Narodów, zorganizowała wymianę czasopism francuskich w zamian za publikacje naukowe pracowników Uczelni. Tą drogą księgozbiór wzbogacił się o czasopismo Revue de Métallurgie - prenumerowane do dnia dzisiejszego.</p>
                    <p>W 1938 roku księgozbiór Biblioteki liczył ponad 17 tysięcy tomów, w tym 5 tysięcy woluminów czasopism.</p>
                    <p>W czasie II wojny światowej zbiory zostały zdeponowane w Bibliotece Jagiellońskiej. Pomimo zakazu władz Generalnego Gubernatorstwa były konspiracyjnie wypożyczane studentom i pracownikom Akademii Górniczej, bowiem Uczelnia nie zawiesiła swojej działalności. Pracownicy prowadzili tajne nauczanie, w wyniku którego przeprowadzono 278 egzaminów kursowych, 16 przewodów dyplomowych i zrealizowano 1 pracę doktorską, której obrona odbyła się po zakończeniu działań wojennych.</p>

                </div>
                <aside class="col-lg-4">
                    <img class="img-thumbnail mt-4" src="img/biblioteka-agh.jpg" alt="Remigiusz Mróz">
                    <h3 class="h4 my-3">Mapa serwisu</h3>
                    <ol class="list-unstyled ml-4">
                        <li>Moje konto</li>
                        <li>Strona główna</li>
                        <li>Godziny otwarcia</li>
                        <li>O bibliotece</li>
                        <li>Zasoby</li>
                        <li>Kontakt</li>
                        <li>Wyloguj się</li>
                    </ol>
                </aside>
            </div>
        </div>
    </article>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>