<?php

include('DatabaseConnection.php');

$fileName=$_POST['FileName'];

$fileLocation=$_POST['FileLocation'];

$sql= "insert into file (`FileName`,`FileLocation`)
values('$fileName','$fileLocation')";

mysqli_query($conn,$sql);

?>