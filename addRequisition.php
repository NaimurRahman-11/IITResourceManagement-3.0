<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$teacherName=$_POST['teacherName'];
$itemName= $_POST['itemName'];
$description= $_POST['description'];

$requisitionStatus= "waiting for Director's approval";

function addRequisition($teacherName,$itemName,$description,$requisitionStatus)
{
  include('DatabaseConnection.php');
  $sql= "insert into requisition (`TeacherName`,`ItemName`,`Description`,`RequisitionStatus`)
  values('$teacherName','$itemName','$description','$requisitionStatus')";
  $res=mysqli_query($conn, $sql);
  return $res;
}


if(addRequisition($teacherName,$itemName,$description,$requisitionStatus)){
       
    echo '<script>alert("Your requisition is placed successfully!");
      location="TeacherPage.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to place your requisition!");
    location="TeacherPage.php";
    </script>';
  }