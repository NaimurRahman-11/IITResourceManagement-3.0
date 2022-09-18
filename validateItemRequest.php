<?php

include('DatabaseConnection.php');
session_start();



$itemRequestArray=$_SESSION['itemRequestArray'];
$itemQuantityArray=$_SESSION['itemQuantityArray'];
$validRequest=true;
$itemRequestString="";
$itemQuantityString="";


print_r($itemRequestArray);
echo '<br>';
print_r($itemQuantityArray);
for($i=0;$i<count($itemRequestArray);$i++)
{
    $selectSql= "SELECT itemName from resource 
    where itemName = '$itemRequestArray[$i]' and amount >= $itemQuantityArray[$i]";
    $selectRes= mysqli_query($conn,$selectSql);
    if($selectRes)
    {
        $itemRequestString .= $itemRequestArray[$i];
        $itemQuantityString .= $itemQuantityArray[$i];
        
        if(($i+1) < count($itemRequestArray))
        {
            $itemRequestString .= ", ";
            $itemQuantityString .= ", ";
        } 
        
    }
    else
    {      
        $count=0;  
        $validRequest=false;
        break;   
    }
    
    
} 

if($validRequest == true)
{
    
    $insertSql= "INSERT into itemrequest(`description`,`amount`)
    values('$itemRequestString','$itemQuantityString')";
    $insertSqlRes= mysqli_query($conn,$insertSql);

    echo '<script>alert("Your request is accepted.!");
        
        </script>';
}
else
{
    echo '<script>alert("Your request can not be accpeted due to shortage.!");
        
        </script>';


}
 

?>