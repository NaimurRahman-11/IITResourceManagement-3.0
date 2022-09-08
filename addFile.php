<?php

include('DatabaseConnection.php');

$fileName='notices';
$fileLocation='Almirah1 row1 column 2';

$sql= "insert into file (`FileName`,`FIleLocation`)
values('$fileName','$fileLocation')";

mysqli_query($conn,$sql);

?>