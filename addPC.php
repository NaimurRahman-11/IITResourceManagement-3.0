<?php

include('DatabaseConnection.php');

$PC_Id=$_POST['PC_Id'];
$PC_status= "Active";
$NoOfComplaint=0; 

$sql= "insert into pc (`PC_Id`,`PC_status`,`NoOfComplaints`)
values('$PC_Id','$PC_status','$NoOfComplaint')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert(" PC is added successfully!");
      location="CheckPCStatus.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to add InfoPC!");
    location="CheckPCStatus.php";
    </script>';
  }

?>