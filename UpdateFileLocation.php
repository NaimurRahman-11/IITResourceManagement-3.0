<?php
include('DatabaseConnection.php');


$FileLocation = $_POST['FileLocation'];
$FileID = $_POST['fileID'];


$sql = "UPDATE file
SET FileLocation='$FileLocation'
WHERE `id`=$FileID";

$res = mysqli_query($conn, $sql);

if($res==true){

    echo '<script>alert("File Location Updated Successfully!");
        location= "ManageFiles.php";
        </script>';
}


?>

