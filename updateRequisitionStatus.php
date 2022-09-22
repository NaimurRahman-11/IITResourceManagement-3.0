<?php

session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

$RequisitionID = $_POST['updateId'];
$Status = $_POST['Status'];

updateItemRequeststatus($RequisitionID,$Status);

function updateItemRequeststatus($RequisitionID,$Status)
{
    include('DatabaseConnection.php');
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





?>

