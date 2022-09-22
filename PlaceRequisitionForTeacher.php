<?php

include('DatabaseConnection.php');
session_start();


if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
$teacherName=$_SESSION['name'];
$itemName= $_POST['itemName'];
$description= $_POST['description'];

$requisitionStatus= "waiting for approval of The Director";

$sql= "INSERT into requisition (`TeacherName`,`ItemName`,`Description`,`RequisitionStatus`)
values('$teacherName','$itemName','$description','$requisitionStatus')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert("Your requisition is placed successfully!");
      location="TeacherPage.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to place your requisition!");
    location="TeacherPage.php";
    </script>';}
  