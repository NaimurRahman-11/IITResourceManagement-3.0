<?php
include('DatabaseConnection.php');
$id=$_GET['AcceptRequestId']."<br>";

$updateSql="UPDATE itemRequest 
set itemRequeststatus='Accepted'
where id='$id'";
$updateSqlResult=mysqli_query($conn,$updateSql);

$fetchSql= "SELECT * from itemRequest where id= '$id'";
$fetchSqlResult= mysqli_query($conn,$fetchSql);
$row=mysqli_fetch_assoc($fetchSqlResult);

$itemRequestArray[]=explode(", ",$row['description']);
$itemQuantityArray[]=explode(", ",$row['amount']);


validateItemRequest($itemRequestArray,$itemQuantityArray);

function validateItemRequest($itemRequestArray,$itemQuantityArray)
{
    include('DatabaseConnection.php');
    
    $validRequest=true;


    
    for($i=0;$i<count($itemRequestArray[0]);$i++)
    {
        
        $item=$itemRequestArray[0][$i];
        $quantity=$itemQuantityArray[0][$i];

        $selectSql= "SELECT * from resource 
        where itemName = '$item' and amount >= $quantity"; 
        $selectRes= mysqli_query($conn,$selectSql);
        
    
         if(mysqli_num_rows($selectRes) == 0)
         {

            $validRequest=false;
            break; 
            
         }  
         
    } 

    if($validRequest == true)
    {
        
        for($i=0;$i<count($itemRequestArray[0]);$i++)
        {
            $item=$itemRequestArray[0][$i];
            $quantity=$itemQuantityArray[0][$i];

            $updateSql= "UPDATE  resource 
            set amount = amount-$quantity
            where itemName = '$item'";
            $selectRes= mysqli_query($conn,$updateSql);
            if($selectRes)
            {
                echo "succeesful";

            }
            else
            echo "failed";
        }

        echo '<script>alert("You have successfully accepted the request.");
        
            </script>';
    }
    else
    {
        echo '<script>alert("You can not accept the request due to shortage.!");
        
            </script>';
    }
}    
?>