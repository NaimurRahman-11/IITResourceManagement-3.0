<?php



$RequisitionID = $_GET['rejectId'];
$Status = 'Rejected';
function rejectRequisition($RequisitionID,$Status)
{
    include('DatabaseConnection.php');
    $sql = "UPDATE requisition
    SET RequisitionStatus='$Status'
    WHERE `id`=$RequisitionID";

    $res = mysqli_query($conn, $sql);
    return $res;


}

if(rejectRequisition($RequisitionID,$Status)){
    

    echo '<script>alert("Requisition is rejected successfully!");
        location= "requisitionResponse.php";
        </script>';
}


?>

