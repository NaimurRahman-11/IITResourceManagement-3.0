<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}


$ResourceID = $_POST['addId'];
$increasedAmount = $_POST['increasedAmount'];

//  $selectsql= "SELECT * from resource where `id`=$ResourceID";
//  $res = mysqli_query($conn, $selectsql);
addLabEquipment($ResourceID,$increasedAmount);

function addLabEquipment($ResourceID,$increasedAmount)
{
    include('DatabaseConnection.php');
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
// if(mysqli_num_rows($res) >0)
// {
    

// }




?>

