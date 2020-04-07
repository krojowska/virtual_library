
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
    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];
    $datawydania = $_POST['datawydania'];
    $iloscsztuk = $_POST['iloscsztuk'];
    $sql="UPDATE zasoby SET tytul='$tytul', autor='$autor', datawydania = '$datawydania', iloscsztuk='$iloscsztuk' WHERE id='$id'";
    $data1 = mysqli_query($polaczenie,$sql);
    if($data1)
    {
        $msg= "Successfully Edit";
        header('Location: zasoby.php');
    }
    else
    {
        $msg= "Something Went Wrong..";
    }

    $polaczenie->close();
}
?>


