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
 
// if(mysqli_num_rows($res) >0)
// {
function addResourceToTAble($ResourceID,$increasedAmount)
{
    include('DatabaseConnection.php');
    $sql = "UPDATE resource
    SET amount = amount+ $increasedAmount
    WHERE `id`=$ResourceID";

    $res = mysqli_query($conn, $sql);
    return $res;

}    
    

if(addResourceToTAble($ResourceID,$increasedAmount))
{
    echo '<script>alert("Resource added successfully!");
         location= "UpdateResources.php";
        </script>';
}

// }
// else
// {
//     echo '<script>alert("Resource Id is wrong!");
//         location= "UpdateResources.php";
//         </script>';
// }



?>

