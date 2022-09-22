<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('DatabaseConnection.php');
$deleteId= $_POST['deleteId'];

$fetchsql= "SELECT * from resource where id=$deleteId";
$fetchres= mysqli_query($conn,$fetchsql);
$row= mysqli_fetch_assoc($fetchres);

$sql= "DELETE from resource where id=$deleteId";
$res= mysqli_query($conn,$sql);

if($row['ItemCategory'] == 'lab')
{
    header('location:updateLabEquipment.php');
 }
 else 
 {
     header('location:UpdateResources.php');
 }


?>