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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><img src="img/logo.png" width="30" height="30" alt="" class="d-inline-block"> wb.pl<a>
        </nav>
    </header>
<a href="logout.php">Wyloguj sie</a>
<main>

    <section class="jumpers">

        <div class="container">

            <header>

                <h1>Poznajmy zawodników</h1>
                <p>W tej sekcji specjalnie dla Was prezentujemy sylwetki zawodników, których znamy z rywalizacji w konkursach pucharu świata oraz olimpijskich. Poznaj osiągnięcia, statystyki, a także ciekawostki na temat najbardziej rozpoznawalnych zawodników!</p>

            </header>

            <div class="row">

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/malysz.jpg" alt="Adam Małysz"></a>
                        <figcaption>Adam Małysz</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/stoch.jpg" alt="Kamil Stoch"></a>
                        <figcaption>Kamil Stoch</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/ahonen.jpg" alt="Janne Ahonen"></a>
                        <figcaption>Janne Ahonen</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/schmitt.jpg" alt="Martin Schmitt"></a>
                        <figcaption>Martin Schmitt</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/kubacki.jpg" alt="Dawid Kubacki"></a>
                        <figcaption>Dawid Kubacki</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/zyla.jpg" alt="Piotr Żyła"></a>
                        <figcaption>Piotr Żyła</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/kranjec.jpg" alt="Robert Kranjec"></a>
                        <figcaption>Robert Kranjec</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/schlierenzauer.jpg" alt="Gregor Schlierenzauer"></a>
                        <figcaption>Gregor Schlierenzauer</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/kot.jpg" alt="Maciej Kot"></a>
                        <figcaption>Maciej Kot</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/kraft.jpg" alt="Stefan Kraft"></a>
                        <figcaption>Stefan Kraft</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/ammann.jpg" alt="Simon Ammann"></a>
                        <figcaption>Simon Ammann</figcaption>
                    </figure>

                </div>

                <div class="col-sm-6 col-md-4">

                    <figure>
                        <a href="#"><img src="img/kasai.jpg" alt="Noriaki Kasai"></a>
                        <figcaption>Noriaki Kasai</figcaption>
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