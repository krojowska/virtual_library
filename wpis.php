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
                    <a class="nav-link" href="moje-konto.php"> Moje konto </a>
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
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-white text-dark wpis mt-4">
                    <header><h1 class="h2 font-weight-bold text-uppercase ml-0 mb-4 text-center text-md-left">Remigiusz Mróz</h1></header>
                    <p>Polski prawnik i pisarz, autor powieści oraz cyklu publicystycznego „Kurs pisania”, laureat Nagrody Czytelników Wielkiego Kalibru z 2016 roku za powieść pt. Kasacja. W 2017 roku ujawnił się jako Ove Løgmansbø, autor kolejnych trzech powieści.</p>

                    <h2 class="h3 font-weight-bold mb-4">Życie prywatne</h2>

                    <p>Absolwent I Liceum Ogólnokształcącego w Opolu. Ukończył z wyróżnieniem studia w Akademii Leona Koźmińskiego w Warszawie, gdzie w Kolegium Prawa na podstawie rozprawy pt. „Cyfryzacja sfery władztwa publicznego” napisanej pod kierunkiem Jana Wawrzyniaka w 2015 uzyskał stopień naukowy doktora nauk prawnych. Jest autorem kilku artykułów naukowych, laureatem konkursu Krajowej Izby Gospodarczej „Polska Cyfrowa 2020+” oraz ambasadorem kampanii przeciwko przemocy wobec kobiet "Kocham. Szanuję".</p>
                    <p>Jako pierwszy polski pisarz otrzymał w 2016 roku podwójną nominację do Nagrody Wielkiego Kalibru Międzynarodowego Festiwalu Kryminalnego za książki Kasacja oraz Zaginięcie.</p>
                    <h2 class="h3 font-weight-bold mb-4">Twórczość</h2>

                    <p>Remigiusz Mróz swojej twórczości sięga po różne gatunki literackie (powieść historyczna, kryminał, thriller prawniczy, science fiction), a tym, co łączy jego książki, jest suspens i wartka akcja. W swoich kryminałach porusza także kwestie społeczne, m.in. problem uchodźców, mniejszości narodowych czy przemocy domowej. Jego książki zostały przełożone m.in. na niemiecki, czeski, japoński i węgierski. Według tygodnika Wprost był najlepiej zarabiającym pisarzem w Polsce w 2019 roku.</p>

                    <blockquote class="blockquote">
                        <p class="mb-1">Kim jestem? Zwyczajnym facetem, który codziennie musi napisać około dziesięciu stron i przebiec mniej więcej tyle samo kilometrów, żeby nie sfiksować..</p>
                        <footer class="blockquote-footer">Remigiusz Mróz</footer>
                    </blockquote>
                    <h2 class="h3 font-weight-bold mb-4">O sobie</h2>
                    <p>Jaki mam modus operandi? Siedzę do późna, wstaję względnie wcześnie. Kawy ani innych pobudzaczy nie potrzebuję, bo napęd do działania daje mi fakt, że pisanie to moja pasja (a oprócz tego jestem beznadziejnym pracoholikiem). Zaczynam dzień od zaparzenia dwóch litrów zielonej herbaty (najczęściej gunpowdera lub genmaichy), które starczają mi na pierwszą turę pisania. Trwa do czternastej, kiedy to zamykam z hukiem laptopa i pędzę do nieodległego lasu, by przy mocnych dźwiękach rocka lub metalu wybiegać swoją dzienną normę i oczyścić umysł. Po tym krótkim resecie jem pizzę na pełnoziarnistym cieście lub sushi i jestem gotów do drugiej tury pisarskiej. Pracuję do dwudziestej trzeciej, po czym zasiadam wygodnie z książką, którą popełnił ktoś inny i się relaksuję.</p>

                    <img class="img-thumbnail float-left mr-3 mt-2" src="img/remekmroz-art.jpg" alt="remek">

                    <p>Pierwsze otwarcie ślepi nastąpiło 15 stycznia 1987 r. w Opolu. Początkowo było pięknie – piłka toczyła się po betonowym boisku, kolana zdzierały się w zastraszającym tempie, a po lekcjach polsaty i tvny serwowały najlepsze amerykańskie seriale z późnych lat osiemdziesiątych.</p>

                    <p>Później było tylko lepiej – nieśmiertelne głosy lektorskie czytały dialogi z seriali kręconych już w latach dziewięćdziesiątych, a Opole rozwijało się i kwitło, uparcie uważając, że powinno być miastem wojewódzkim (słusznie!). Delikwent, o którym mowa, ukończył I Liceum Ogólnokształcące w tejże pięknej mieścinie, po czym udał się na emigrację do krainy, w której dumnie przywdział płaszcz słoika – choć wówczas to pojęcie chyba jeszcze nie istniało (albo nie było tak chodliwe). Stolica przygarnęła go i potraktowała czule, wskutek czego zapałał uczuciem do miasta, gdzie Hitler i Stalin (tudzież szwedzki Karol Gustaw i inni) zrobili co swoje.</p>
                    <img class="img-thumbnail mb-3 d-block mx-auto" src="img/remek2-art.jpg" alt="remek2">

                    <p>Skończywszy studia administracyjne na Akademii Leona Koźmińskiego, postanowił, że mu mało. Nie wiedzieć dlaczego ani skąd, powstał bliżej nieokreślony deficyt, który przekuł się na kolejne studia (prawnicze) i doktorat (z prawa konstytucyjnego, coby móc w pełni odczuwać konsternację, kiedy politycy zabierają się do tej materii).</p>
                    <p>Obecnie rezyduje w niewielkiej miejscowości pod Opolem, której nazwa wykuta została we współczesnym kamieniu w języku polskim i niemieckim. Cierpi na permanentny writing blitz, skutkiem którego jest 30 ukończonych powieści, a kolejne dobijają się z podświadomości… dobijają… i dobijają…</p>
                </div>
                <aside class="col-lg-4">
                    <img class="img-thumbnail mt-4" src="img/remekmroz.jpg" alt="Remigiusz Mróz">
                    <h3 class="h4 my-4">Popularni pisarze</h3>
                    <ul class="list-group">
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action active">Remigiusz Mróz</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Stephen King</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Janne Ahonen</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Martin Schmitt</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Dawid Kubacki</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Piotr Żyła</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Robert Kranjec</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Gregor Schlierenzauer</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Maciej Kot</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Stefan Kraft</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Simon Ammann</a>
                        <a ref="#" class="list-group-item list-group-item-dark list-group-item-action">Noriaki Kasai</a>
                    </ul>

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