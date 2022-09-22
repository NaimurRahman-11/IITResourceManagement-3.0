<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
 $PC_ID = $_GET['PcId'];

// $sql = "DELETE FROM pc WHERE `PC_Id`=$PC_ID";

// $res = mysqli_query($conn, $sql);

function deleteFileInfo($PC_ID)
{
  include('DatabaseConnection.php');

  $sql = "DELETE FROM pc WHERE `PC_Id`=$PC_ID";

  $res = mysqli_query($conn, $sql);
  return $res;

}
if(deleteFileInfo($PC_ID)){
  header('location: CheckPCStatus.php');
}


?>