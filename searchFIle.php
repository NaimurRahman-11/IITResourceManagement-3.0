<?php
include('FetchAllFiles.php');
$fileName='notices';
$fileName= '/'.$fileName.'/i';

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