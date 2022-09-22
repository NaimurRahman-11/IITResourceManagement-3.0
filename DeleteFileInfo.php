<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
$File_no = $_POST['deleteId'];


function deleteFileInfo($File_no)
{
  include('DatabaseConnection.php');
  $sql = "DELETE FROM file WHERE `id`=$File_no";

  $res = mysqli_query($conn, $sql);
  return $res;

}


if(deleteFileInfo($File_no)){
  header('location: ManageFiles.php');
}


?>