<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('DatabaseConnection.php');

$Complaint_No = $_GET['idd'];
$PC_ID='';

$selectForUpdateSql= "SELECT  PC_ID FROM placecomplaint
WHERE Complaint_No=$Complaint_No";
$selectForUpdateSqlResult= mysqli_query($conn, $selectForUpdateSql);

while($row=mysqli_fetch_assoc($selectForUpdateSqlResult))
{
  $PC_ID= $row['PC_ID'];
}

$updateNoOfComplaints= "update pc set  NoOfComplaints= NoOfComplaints-1
where PC_Id=$PC_ID";
mysqli_query($conn, $updateNoOfComplaints);

$updatePcStatus= "update pc set PC_status='Active'
where NoOfComplaints= 0";
mysqli_query($conn, $updatePcStatus);

$insertSql = "INSERT INTO solvedcomplaints (`Complaint_No`, `Academic_Roll`, `PC_Id`, `Description`)
SELECT Complaint_No, Academic_Roll, PC_Id, Description FROM placecomplaint
WHERE Complaint_No=$Complaint_No";

$insertSqlRes = mysqli_query($conn, $insertSql);

$DeleteSql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$DeleteSqlRes = mysqli_query($conn, $DeleteSql);

if($DeleteSqlRes==true){
  header('location: ManageComplaints.php');
}


?>