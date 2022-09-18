<?php
include('DatabaseConnection.php');


$RequisitionID = $_GET['acceptedId'];



$sql = "INSERT into acceptedrequisition(`id`,`TeacherName`,`ItemName`,`Description`)
select `id`, `TeacherName`,`ItemName` , `Description` from requisition
WHERE `id`=$RequisitionID";

$res = mysqli_query($conn, $sql);

if($res==true){
    $sql= "DELETE from requisition where `id`=$RequisitionID";
    $res = mysqli_query($conn, $sql);

    echo '<script>alert("Requisition is accepted successfully!");
        location= "requisitionResponse.php";
        </script>';
}


?>

