<?php
include('DatabaseConnection.php');
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$Complaint_No = $_GET['id'];
$PC_ID='';

$selectForUpdateSql= "SELECT  PC_ID FROM placecomplaint
WHERE Complaint_No=$Complaint_No";
$selectForUpdateSqlResult= mysqli_query($conn, $selectForUpdateSql);

while($row=mysqli_fetch_assoc($selectForUpdateSqlResult))
{
  $PC_ID= $row['PC_ID'];
}

$updateNoOfComplaints= "UPDATE pc set  NoOfComplaints= NoOfComplaints-1, complaintStatus= 'rejected'
where PC_Id=$PC_ID";
mysqli_query($conn, $updateNoOfComplaints);

$updateNoOfStatus= "UPDATE placecomplaint set complaintStatus= 'rejected'
where PC_Id=$PC_ID";
mysqli_query($conn, $updateNoOfStatus);


$updatePcStatus= "UPDATE pc set PC_status='Active'
where NoOfComplaints= 0";
mysqli_query($conn, $updatePcStatus);


header('location: ManageComplaints.php');


?>