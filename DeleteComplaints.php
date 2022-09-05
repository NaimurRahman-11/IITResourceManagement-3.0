<?php
include('DatabaseConnection.php');

$Complaint_No = $_GET['id'];

$sql = "DELETE FROM placecomplaint WHERE Complaint_No=$Complaint_No";

$res = mysqli_query($conn, $sql);

if($res==true){
  header('location: ManageComplaints.php');
}

?>