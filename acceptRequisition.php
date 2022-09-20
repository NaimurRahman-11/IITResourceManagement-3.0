<?php



$RequisitionID = $_GET['acceptedId'];

acceptRequisition($RequisitionID);


function acceptRequisition($RequisitionID)
{
    include('DatabaseConnection.php');
    

    $res = insertIntoacceptRequisitionTable($RequisitionID);

    if($res==true){
        $sql= "DELETE from requisition where `id`=$RequisitionID";
        $res = mysqli_query($conn, $sql);

        echo '<script>alert("Requisition is accepted successfully!");
            location= "requisitionResponse.php";
            </script>';
}
}

function insertIntoAcceptRequisitionTable($RequisitionID)
{
    include('DatabaseConnection.php');
    $sql = "INSERT into acceptedrequisition(`id`,`TeacherName`,`ItemName`,`Description`)
    select `id`, `TeacherName`,`ItemName` , `Description` from requisition
    WHERE `id`=$RequisitionID";

    $res = mysqli_query($conn, $sql);
    return $res;

}


?>

