<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}


$FileLocation = $_POST['FileLocation'];
$FileID = $_POST['updateId'];

function updateFileLocation($FileLocation,$FileID)
{
    include('DatabaseConnection.php');
    $sql = "UPDATE file
    SET FileLocation='$FileLocation'
    WHERE `id`=$FileID";

    $res = mysqli_query($conn, $sql);
    return  $res;

}



if(updateFileLocation($FileLocation,$FileID)){

    echo '<script>alert("File Location Updated Successfully!");
        location= "ManageFiles.php";
        </script>';
}


?>

