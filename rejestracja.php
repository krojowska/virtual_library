<?php
session_start();
if(isset($_POST['email']))
{
    $wszystko_OK=true;
    $nick=$_POST['nick'];
    if(strlen($nick)<3 || (strlen($nick)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_nick']="Nick musi posiadac od 3 do 20 znakow!";
    }

    if(ctype_alnum($nick)==false)
    {
        $wszystko_OK=false;
        $_SESSION['e_nick']="Nick moze skladac sie tylko z liter i cyfr (bez polskich znakow)";
    }

    $email=$_POST['email'];
    $emailB=filter_var($email, FILTER_SANITIZE_EMAIL);
    if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
    {
       $wszystko_OK=false;
       $_SESSION['e_email']="Podaj poprawny adres e-mail";
    }
        $haslo1=$_POST['haslo1'];
        $haslo2=$_POST['haslo2'];

        if((strlen($haslo1)<8) || (strlen($haslo1)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Haslo musi posiadac od 8 do 20 znakow";
        }

        if($haslo1!=$haslo2)
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Podane hasla nie sa identyczne";
        }
        $haslo_hash=password_hash($haslo1, PASSWORD_DEFAULT);

        //czy zaakceptowano regulamin?
        if(!isset($_POST['regulamin']))
        {
            $wszystko_OK=false;
            $_SESSION['e_regulamin']="Potwierdz akceptacje regulaminu";
        }

        //bot or not
        $sekret = "6LfUdeMUAAAAAIsVo6ZkJI8GCpo9fMEbj8gXajVA";
        $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='
            .$sekret.'&response='.$_POST['g-recaptcha-response']);
        $odpowiedz = json_decode($sprawdz);
        if($odpowiedz->success==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_bot']="Potwierdz, ze nie jestes botem";
        }
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
        {
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            if($polaczenie->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else
            {
                //czy email juz istnieje?
                $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
                if(!$rezultat) throw new Exception($polaczenie->error);
                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_email']="Istnieje juz konto z takim adresem email";
                }

                //czy nick juz istnieje?
                $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
                if(!$rezultat) throw new Exception($polaczenie->error);
                $ile_takich_nickow = $rezultat->num_rows;
                if($ile_takich_nickow>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_nick']="Istnieje juz konto z takim nickiem";
                }
                if($wszystko_OK==true)
                {
                    if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash','$email')"))
                    {
                        $_SESSION['udanarejestracja']=true;
                        header('Location: witamy.php');
                    }
                    else
                    {
                        throw new Exception($polaczenie->error);
                    }
                }

                $polaczenie->close();
            }
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;"> Blad serwera. Przepraszamy za niedogodnosci</span>';
            //echo '<br/> Informacja deweloperska: '.$e;
        }
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv=X-UA-Compatible" content="IE=edge, chrome=1"/>
    <link rel = "stylesheet" href="style-logowanie.css" type="text/css"/>
    <title>WB rejestracja</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .error
        {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
<h1>Witaj w <span style="color: #2CBFA4;">Wirtualnej Bibliotece</span></h1>
<br/><br/><br/>
<form method="post">
    Nickname: <br/><input type="text" name="nick"/><br/><br/>
    <?php
        if(isset($_SESSION['e_nick']))
        {
            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
            unset($_SESSION['e_nick']);
        }
    ?>
    E-mail: <br/><input type="text" name="email"/><br/><br/>
    <?php
    if(isset($_SESSION['e_email']))
    {
        echo '<div class="error">'.$_SESSION['e_email'].'</div>';
        unset($_SESSION['e_email']);
    }
    ?>
    Hasło: <br/><input type="password" name="haslo1"/><br/><br/>
    <?php
    if(isset($_SESSION['e_haslo']))
    {
        echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
        unset($_SESSION['e_haslo']);
    }
    ?>
    Powtórz hasło: <br/><input type="password" name="haslo2"/><br/><br/>
    <label>
        <input type="checkbox" name="regulamin"/>Akceptuję regulamin
    </label>
    <br/><br/>

    <?php
    if(isset($_SESSION['e_regulamin']))
    {
        echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
        unset($_SESSION['e_regulamin']);
    }
    ?>

<style>
    .text-center {
        text-align: center;
    }

    .g-recaptcha {
        display: inline-block;
    }
</style>

<div class="text-center">
    <div class="g-recaptcha" data-sitekey="6LfUdeMUAAAAAIh6LSgXyEeQNUiIsHyNKEZ1WUtb"></div>
</div>
    <?php
    if(isset($_SESSION['e_bot']))
    {
        echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
        unset($_SESSION['e_bot']);
    }
    ?>
    <br/>
    <input class="btn" type="submit" value="Zarejestruj sie">
</form>
</body>

</html>
