<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}
$itemRequestArray=array();
$itemQuantityArray=array();

if($_POST['penQuantitybox'] != null)
{
    array_push($itemRequestArray,'pen');
    array_push($itemQuantityArray,$_POST['penQuantitybox']);
}
if($_POST['markerQuantitybox'] != null)
{
    array_push($itemRequestArray,'marker');
    array_push($itemQuantityArray,$_POST['markerQuantitybox']);
}
if($_POST['A4PaperQuantitybox'] != null)
{
    array_push($itemRequestArray,'A4 Paper');
    array_push($itemQuantityArray,$_POST['A4PaperQuantitybox']);
}
if($_POST['tissueQuantitybox'] != null)
{
    array_push($itemRequestArray,'tissue box');
    array_push($itemQuantityArray,$_POST['tissueQuantitybox']);
}
if($_POST['airFreshnerQuantitybox'] != null)
{
    array_push($itemRequestArray,'Air Freshner');
    array_push($itemQuantityArray,$_POST['airFreshnerQuantitybox']);
}

validateItemRequest($itemRequestArray,$itemQuantityArray);

function validateItemRequest($itemRequestArray,$itemQuantityArray)
{
   
    include('DatabaseConnection.php');;
    
    $validRequest=true;
    $itemRequestString="";
    $itemQuantityString="";

    
    for($i=0;$i<count($itemRequestArray);$i++)
    {
        $selectSql= "SELECT itemName from resource 
        where itemName = '$itemRequestArray[$i]' and amount >= $itemQuantityArray[$i]";
        $selectRes= mysqli_query($conn,$selectSql);
        
        if(mysqli_num_rows($selectRes) > 0)
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
            $validRequest=false;
            break;   
        }
        
        
    } 
    

    if($validRequest == true)
    {

        $name= $_SESSION['name'];
        
        $insertSql= "INSERT into itemrequest(`teacherName`,`description`,`amount`)
        values('$name','$itemRequestString','$itemQuantityString')";
        $insertSqlRes= mysqli_query($conn,$insertSql);

        echo '<script>alert("Your request is successfully placed.!");
        location="TeacherPage.php"
            </script>';
    }
    else
    {
        echo '<script>alert("Your request can not be accpeted due to shortage.!");
        location="TeacherPage.php"
            </script>';


    }
 

}
?>