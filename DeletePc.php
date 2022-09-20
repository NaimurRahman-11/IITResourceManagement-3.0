<?php

 $PC_ID = $_GET['PcId'];

// $sql = "DELETE FROM pc WHERE `PC_Id`=$PC_ID";

// $res = mysqli_query($conn, $sql);

function deleteFileInfo($PC_ID)
{
  include('DatabaseConnection.php');

  $sql = "DELETE FROM file WHERE `PC_Id`=$PC_ID";

  $res = mysqli_query($conn, $sql);
  return $res;

}
if(deleteFileInfo($PC_ID)){
  header('location: CheckPCStatus.php');
}


?>