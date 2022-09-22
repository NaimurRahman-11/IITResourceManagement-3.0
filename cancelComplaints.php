<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$Complaint_No = $_GET['id'];

$PC_ID=getPcId($Complaint_No);

function getPcId($Complaint_No)
{
  include('DatabaseConnection.php');
  $PC_ID='';
  $selectForUpdateSql= "SELECT  PC_ID FROM placecomplaint
  WHERE Complaint_No=$Complaint_No";
  $selectForUpdateSqlResult= mysqli_query($conn, $selectForUpdateSql);

  while($row=mysqli_fetch_assoc($selectForUpdateSqlResult))
  {
    $PC_ID= $row['PC_ID'];
  }
  return $PC_ID;

}
updateNoOfComplaints($PC_ID);
updatePcStatus();

if(deleteFromComlaintsTable($Complaint_No)){
  header('location: YourComplaints.php');
}
function updateNoOfComplaints($PC_ID)
{
  include('DatabaseConnection.php');
  $updateNoOfComplaints= "UPDATE pc set  NoOfComplaints= NoOfComplaints-1
  where PC_Id=$PC_ID";
  mysqli_query($conn, $updateNoOfComplaints);
  
}  
function updatePcStatus()
{
  include('DatabaseConnection.php');
  $updatePcStatus= "UPDATE pc set PC_status='Active'
  where NoOfComplaints= 0";
  mysqli_query($conn, $updatePcStatus);

}

function deleteFromComlaintsTable($Complaint_No)
{
  include('DatabaseConnection.php');
  $deleteSql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

  $deleteSqlRes = mysqli_query($conn, $deleteSql);
  return $deleteSqlRes;
}
  

  




?>