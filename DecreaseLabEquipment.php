<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
$ResourceID = $_POST['decreaseId'];
$decreasedAmount = $_POST['decreasedAmount'];

function isAmountZero($ResourceID,$decreasedAmount)
{
    include('DatabaseConnection.php');
    $selectsql= "SELECT * from resource where `id`= $ResourceID and `amount` >= $decreasedAmount";
    $selectsqlres = mysqli_query($conn, $selectsql);
    return  $selectsqlres;

}


if(mysqli_num_rows(isAmountZero($ResourceID,$decreasedAmount)) >0)
{
        

    if(decreaseLabEquipment($ResourceID ,$decreasedAmount)){

        echo '<script>alert("Resource decreased successfully!");
        location= "updateLabEquipment.php";
            </script>';
    }

}
else
{
    echo '<script>alert("Invalid decreased amount!");
    location= "updateLabEquipment.php";
        </script>';
}
function decreaseLabEquipment($ResourceID ,$decreasedAmount)
{
    include('DatabaseConnection.php');
    $sql = "UPDATE resource
    SET amount = amount - $decreasedAmount
    WHERE `id`=$ResourceID";
    
    $res = mysqli_query($conn, $sql);
    return $res;
    
}




?>

