<?php
include('DatabaseConnection.php');
$rejectRequestId=$_GET['rejectRequestId'];

$updateSql="UPDATE itemRequest 
set itemRequeststatus='Stock out'
where id=$rejectRequestId";
$updateSqlResult=mysqli_query($conn,$updateSql);

?>