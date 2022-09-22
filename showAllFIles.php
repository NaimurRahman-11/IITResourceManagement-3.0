<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('FetchAllFiles.php');

echo "<table border=1>";

echo "<th>ID</th> <th>FileName</th> <th>FileLocation</th>";

while($row= mysqli_fetch_assoc($fetchfile))
{
    echo "<tr>";
    echo "<td>".$row['id'].'</td>';
    echo "<td>".$row['FileName'].'</td>';
    echo "<td>".$row['FIleLocation'].'</td>';
    echo '</tr>';
}
echo "</table>";

?>