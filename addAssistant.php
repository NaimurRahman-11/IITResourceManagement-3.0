<?php
include('DatabaseConnection.php');
$type=$_POST['type'];
$email=$_POST['email'];
$password=$_POST['password'];
$status='approved';

$sql= "INSERT into userTable(`Designation`,`Email`,`userPassword`,'userStatus')
values ('$type','$email','$password','$status')";
$res=mysqli_query($conn,$sql);
header('location:DirectorPage.html');
?>