<?php
include('DatabaseConnection.php');
$id=$_POST['feedbackId'];
$feedback=$_POST['feedback'];

$insertSql= "UPDATE acceptedrequisition 
set feedback= '$feedback'
where id=$id";
$insertSqlRes= mysqli_query($conn,$insertSql);

if($insertSqlRes)
{
    header('location:showAcceptedRequisition.php');
}
?>