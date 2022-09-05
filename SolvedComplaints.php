<?php
include('DatabaseConnection.php');

$Complaint_No = $_GET['idd'];

// $sql = "SELECT * FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$sql = "INSERT INTO solvedcomplaints (`Complaint_No`, `Student_ID`, `PC_ID`, `Description`)
SELECT Complaint_No, Student_ID, PC_ID, Description FROM placecomplaint
WHERE Complaint_No=$Complaint_No";

$res = mysqli_query($conn, $sql);

$sql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$res = mysqli_query($conn, $sql);

if($res==true){
  header('location: ManageComplaints.php');
}


?>