<?php

$rejectRequestId=$_GET['rejectRequestId'];

function sentStockOutResponse($rejectRequestId)
{
    include('DatabaseConnection.php');
    $updateSql="UPDATE itemRequest 
    set itemRequeststatus='Stock out'
    where id=$rejectRequestId";
    $updateSqlResult=mysqli_query($conn,$updateSql);
    return     $updateSqlResult;

} 


if(sentStockOutResponse($rejectRequestId))
{
    header('location:itemRequestResponse.php');
}

?>