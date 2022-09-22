<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$fileName=$_POST['FileName'];

$fileLocation=$_POST['FileLocation'];

$fileCategory=$_POST['FileCategory'];

if(addFileIntoTable($fileName,$fileLocation,$fileCategory)){
       
    echo '<script>alert("Information about a File is added successfully!");
      location="ManageFiles.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to add Information about a File!");
    location="ManageFiles.php";
    </script>';
  }

  function addFileIntoTable($fileName,$fileLocation,$fileCategory)
  {
    include('DatabaseConnection.php');
    $sql= "INSERT into file (`FileName`,`FileLocation`,`FileCategory`)
    values('$fileName','$fileLocation','$fileCategory')";
    $res= mysqli_query($conn, $sql);
    return $res;
  }

?>