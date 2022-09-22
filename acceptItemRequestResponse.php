<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
include('DatabaseConnection.php');
$id=$_GET['AcceptRequestId']."<br>";



$fetchSql= "SELECT * from itemRequest where id= '$id'";
$fetchSqlResult= mysqli_query($conn,$fetchSql);
$row=mysqli_fetch_assoc($fetchSqlResult);

$itemRequestArray[]=explode(", ",$row['description']);
$itemQuantityArray[]=explode(", ",$row['amount']);


validateItemRequest($itemRequestArray,$itemQuantityArray,$id);

function validateItemRequest($itemRequestArray,$itemQuantityArray,$id)
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
        
        updateItemRequeststatus($id);
        updateResourcesOfRequest($itemRequestArray,$itemQuantityArray);

        echo '<script>alert("You have successfully accepted the request.");
              location="itemRequestResponse.php";
            </script>';
    }
    else
    {
        echo '<script>alert("You can not accept the request due to shortage.!");
        location="itemRequestResponse.php";
            </script>';
    }
}   
function updateItemRequeststatus($id)
{
    include('DatabaseConnection.php');
    $updateSql="UPDATE itemRequest 
    set itemRequeststatus='Accepted'
    where id='$id'";
    $updateSqlResult=mysqli_query($conn,$updateSql);

}
function updateResourcesOfRequest($itemRequestArray,$itemQuantityArray)
{
    include('DatabaseConnection.php');
    for($i=0;$i<count($itemRequestArray[0]);$i++)
        {
            $item=$itemRequestArray[0][$i];
            $quantity=$itemQuantityArray[0][$i];

            $updateSql= "UPDATE  resource 
            set amount = amount-$quantity
            where itemName = '$item'";
            $selectRes= mysqli_query($conn,$updateSql);
            return $selectRes;
        }

}
?>