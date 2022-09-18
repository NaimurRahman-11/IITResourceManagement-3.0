<?php
include('DatabaseConnection.php');

$Complaint_No = $_GET['id'];
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

$deleteSql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$deleteSqlRes = mysqli_query($conn, $deleteSql);

if($deleteSqlRes==true){
  header('location: YourComplaints.php');
}

?>