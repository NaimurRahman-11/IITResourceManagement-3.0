<?php
include('DatabaseConnection.php');

$PC_ID = $_GET['PcId'];

$sql = "DELETE FROM pc WHERE `PC_Id`=$PC_ID";

$res = mysqli_query($conn, $sql);

if($res==true){
  header('location: CheckPCStatus.php');
}


?>