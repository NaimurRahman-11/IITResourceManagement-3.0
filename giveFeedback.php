<?php

$id=$_POST['feedbackId'];
$feedback=$_POST['feedback'];

function insertFeedback($id,$feedback)
{
    include('DatabaseConnection.php');
    $insertSql= "UPDATE acceptedrequisition 
    set feedback= '$feedback'
    where id=$id";
    $insertSqlRes= mysqli_query($conn,$insertSql);
    return     $insertSqlRes;

}



if(insertFeedback($id,$feedback))
{
    header('location:YourRequisition.php');
}
?>