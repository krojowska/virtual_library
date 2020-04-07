<?php
session_start();
require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno;
}
else {
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $comment_length = strlen($comment);

    $sql = "INSERT INTO opinie VALUES ('','$name', '$comment')";

    if ($polaczenie->query($sql) === TRUE) {
        header("refresh: 1; url=opinie.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
    }
    $polaczenie->close();}

?>