<?php
include('DatabaseConnection.php');

$fileName=$_POST['FileName'];
$fileName= '/'.$fileName.'/i';

$sql= "select * from file";
$fetchfile= mysqli_query($conn,$sql);


echo "<table border=1>";

echo "<th>ID</th> <th>FileName</th> <th>FileLocation</th>";

while($row= mysqli_fetch_assoc($fetchfile))
{
    if(preg_match($fileName,$row['FileName']))
    {
        echo "<tr>";
        echo "<td>".$row['id'].'</td>';
        echo "<td>".$row['FileName'].'</td>';
        echo "<td>".$row['FIleLocation'].'</td>';
        echo '</tr>';
    }
    
}
echo "</table>";


?>