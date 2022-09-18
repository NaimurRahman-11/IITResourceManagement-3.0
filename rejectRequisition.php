<?php
include('DatabaseConnection.php');


$RequisitionID = $_GET['rejectId'];
$Status = 'Rejected';


$sql = "UPDATE requisition
SET RequisitionStatus='$Status'
WHERE `id`=$RequisitionID";

$res = mysqli_query($conn, $sql);

if($res==true){

    echo '<script>alert("Requisition is rejected successfully!");
        location= "requisitionResponse.php";
        </script>';
}


?>

