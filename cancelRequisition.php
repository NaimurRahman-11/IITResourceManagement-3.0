<?php
include('DatabaseConnection.php');

$requisitionId = $_GET['cancelRequisition'];

$sql = "DELETE FROM requisition WHERE `id`=$requisitionId";

$res = mysqli_query($conn, $sql);

if($res==true){
  header('location:YourRequisition.php ');
}


?>