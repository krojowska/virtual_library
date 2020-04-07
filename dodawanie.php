<?php
session_start();
require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno;
}
else
{
    $tytul=$_POST['tytul'];
    $autor=$_POST['autor'];
    $datawydania=$_POST['datawydania'];
    $iloscsztuk=$_POST['iloscsztuk'];


    $sql = "INSERT INTO zasoby (id, tytul, autor, datawydania, iloscsztuk)
VALUES ('','$tytul', '$autor', '$datawydania', '$iloscsztuk')";

    if ($polaczenie->query($sql) === TRUE) {
        header("refresh: 1; url=zasoby.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
    }
    $polaczenie->close();
}
?>

