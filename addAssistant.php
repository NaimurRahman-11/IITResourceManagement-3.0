<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('DatabaseConnection.php'); $type=$_POST['type'];
 $email=$_POST['email'];
$password=$_POST['password'];
 $status='approved';

$updateSql= "UPDATE  userTable set userStatus='pending' where Designation= '$type'";
$updateRes= mysqli_query($conn,$updateSql);


$sql= "INSERT into userTable(`Designation`,`Email`,`userPassword`,`userStatus`)
values ('$type','$email','$password','$status')";
$res=mysqli_query($conn,$sql);
if($res)
{
    header('location:DirectorPage.php');
}
else
{
    $updateSql= "UPDATE  userTable set userStatus='approved' where Designation= '$type'";
    $updateRes= mysqli_query($conn,$updateSql);
    echo "<script> alert('Can not receive same email');
    location='DirectorPage.php';
    </script> ";
}


?>