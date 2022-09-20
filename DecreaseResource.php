<?php
include('DatabaseConnection.php');


echo $ResourceID = $_POST['decreaseId'];
echo $decreasedAmount = $_POST['decreasedAmount'];

$selectsql= "SELECT * from resource where `id`= $ResourceID and `amount` >= $decreasedAmount";
$res = mysqli_query($conn, $selectsql);

if(mysqli_num_rows($res) >0)
{
    $sql = "UPDATE resource
    SET amount = amount - $decreasedAmount
    WHERE `id`=$ResourceID";

    $res = mysqli_query($conn, $sql);

    if($res==true){

        echo '<script>alert("Resource decreased successfully!");
            location= "UpdateResources.php";
            </script>';
    }

}
else
{
    echo '<script>alert("Invalid decreased amount!");
        location= "UpdateResources.php";
        </script>';
}



?>

