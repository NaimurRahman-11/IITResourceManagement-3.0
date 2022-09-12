<?php
include('DatabaseConnection.php');

$Complaint_No = $_GET['idd'];
$PC_ID='';

$selectForUpdateSql= "SELECT  PC_ID FROM placecomplaint
WHERE Complaint_No=$Complaint_No";
$selectForUpdateSqlResult= mysqli_query($conn, $selectForUpdateSql);
while($row=mysqli_fetch_assoc($selectForUpdateSqlResult))
{

}

$insertSql = "INSERT INTO solvedcomplaints (`Complaint_No`, `Student_ID`, `PC_ID`, `Description`)
SELECT Complaint_No, Student_ID, PC_ID, Description FROM placecomplaint
WHERE Complaint_No=$Complaint_No";

$insertSqlRes = mysqli_query($conn, $insertSql);

$DeleteSql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$DeleteSqlRes = mysqli_query($conn, $sql);

if($DeleteSqlRes==true){
  header('location: ManageComplaints.php');
}


?>