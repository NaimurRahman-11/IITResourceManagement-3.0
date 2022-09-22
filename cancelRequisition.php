<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$requisitionId = $_GET['cancelRequisition'];

function cancelRequisition($requisitionId)
{
  include('DatabaseConnection.php');
  $sql = "DELETE FROM requisition WHERE `id`=$requisitionId";
  $res = mysqli_query($conn, $sql);
  return $res;

}


if(cancelRequisition($requisitionId)){
  header('location:YourRequisition.php ');
}


?>