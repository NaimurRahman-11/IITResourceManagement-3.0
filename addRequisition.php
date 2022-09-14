<?php

include('DatabaseConnection.php');

$teacherName=$_POST['teacherName'];
$itemName= $_POST['itemName'];
$description= $_POST['description'];

$requisitionStatus= "waiting for Director's approval";

$sql= "insert into requisition (`TeacherName`,`ItemName`,`Description`,`RequisitionStatus`)
values('$teacherName','$itemName','$description','$requisitionStatus')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert("Your requisition is placed successfully!");
      location="TeacherPage.html";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to place your requisition!");
    location="TeacherPage.html";
    </script>';
  }