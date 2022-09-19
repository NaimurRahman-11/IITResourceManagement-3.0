<?php
include('DatabaseConnection.php');


$ResourceID = $_POST['ResourceID'];
$increasedAmount = $_POST['increasedAmount'];

 $selectsql= "SELECT * from resource where `id`=$ResourceID";
 $res = mysqli_query($conn, $selectsql);
 
if(mysqli_num_rows($res) >0)
{
    $sql = "UPDATE resource
    SET amount = amount+ $increasedAmount
    WHERE `id`=$ResourceID";

    $res = mysqli_query($conn, $sql);

    if($res==true){

        echo '<script>alert("Resource added successfully!");
            location= "updateLabEquipment.php";
            </script>';
    }

}
else
{
    echo '<script>alert("Resource Id is wrong!");
        location= "updateLabEquipment.php";
        </script>';

}



?>

