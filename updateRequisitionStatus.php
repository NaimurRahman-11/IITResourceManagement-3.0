<?php
include('DatabaseConnection.php');


$RequisitionID = $_POST['RequisitionID'];
$Status = $_POST['Status'];

$selectsql= "SELECT * from requisition where `id`=$RequisitionID";
$res = mysqli_query($conn, $selectsql);

if(mysqli_num_rows($res) >0)
{
    $sql = "UPDATE requisition
    SET RequisitionStatus='$Status'
    WHERE `id`=$RequisitionID";

    $res = mysqli_query($conn, $sql);

    if($res==true){

        echo '<script>alert("Requisition status updated successfully!");
            location= "requisitionResponse.php";
            </script>';
    }

}
else
{
    echo '<script>alert("Requisition Id is wrong!");
        location= "requisitionResponse.php";
        </script>';
}



?>
