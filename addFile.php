<?php

include('DatabaseConnection.php');

$fileName=$_POST['FileName'];

$fileLocation=$_POST['FileLocation'];

$sql= "insert into file (`FileName`,`FileLocation`)
values('$fileName','$fileLocation')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert("Information about a File is added successfully!");
      location="ManageFiles.html";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to add Information about a File!");
    location="ManageFiles.html";
    </script>';
  }

?>