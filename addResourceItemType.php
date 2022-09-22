<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('DatabaseConnection.php');
$category=$_POST['category'];
$itemName=$_POST['itemName'];
$amount=0;

$sql= "INSERT into resource(`ItemCategory`,`ItemName`,`amount`)
values('$category','$itemName','$amount')";
$res=mysqli_query($conn,$sql);

if($category =='lab')
{
   header('location:updateLabEquipment.php');
}
else 
{
    header('location:UpdateResources.php');
}


?>