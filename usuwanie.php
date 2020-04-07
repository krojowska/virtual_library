
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

    $sql="DELETE FROM zasoby WHERE id='$id'";
    $data1 = mysqli_query($polaczenie,$sql);
    if($data1)
    {
        $msg= "Successfully Delete";
        header('Location: zasoby.php');
    }
    else
    {
        $msg= "Something Went Wrong..";
    }

    $polaczenie->close();
}
?>


