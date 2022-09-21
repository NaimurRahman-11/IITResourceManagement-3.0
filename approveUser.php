<?php

$id=$_GET['Id'];

approveUser($id);

function approveUser($id)
{
    include('DatabaseConnection.php');
    $sql="UPDATE usertable 
    set userStatus='approved'
    where id=$id";
    $res=mysqli_query($conn,$sql);
    header('location:ManageUsers.php');

}




?>