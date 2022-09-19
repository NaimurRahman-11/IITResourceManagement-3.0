<?php

$itemRequestArray=array();
$itemQuantityArray=array();

if(isset($_POST['penQuantitybox']))
{
    array_push($itemRequestArray,'pen');
    array_push($itemQuantityArray,$_POST['penQuantitybox']);
}
if(isset($_POST['markerQuantitybox']))
{
    array_push($itemRequestArray,'marker');
    array_push($itemQuantityArray,$_POST['markerQuantitybox']);
}
if(isset($_POST['A4PaperQuantitybox']))
{
    array_push($itemRequestArray,'A4 Paper');
    array_push($itemQuantityArray,$_POST['A4PaperQuantitybox']);
}
if(isset($_POST['tissueQuantitybox']))
{
    array_push($itemRequestArray,'tissue box');
    array_push($itemQuantityArray,$_POST['tissueQuantitybox']);
}
if(isset($_POST['airFreshnerQuantitybox']))
{
    array_push($itemRequestArray,'Air Freshner');
    array_push($itemQuantityArray,$_POST['airFreshnerQuantitybox']);
}

print_r($itemRequestArray);
echo "<br>";
print_r($itemQuantityArray);
$_SESSION['itemRequestArray']=$itemRequestArray;
$_SESSION['itemQuantityArray']=$itemQuantityArray;

// validateItemRequest($itemRequestArray,$itemQuantityArray);

// function validateItemRequest($itemRequestArray,$itemQuantityArray)
// {
//     include('DatabaseConnection.php');;
    
//     $validRequest=true;
//     $itemRequestString="";
//     $itemQuantityString="";


    
//     for($i=0;$i<count($itemRequestArray);$i++)
//     {
//         $selectSql= "SELECT itemName from resource 
//         where itemName = '$itemRequestArray[$i]' and amount >= $itemQuantityArray[$i]";
//         $selectRes= mysqli_query($conn,$selectSql);
//         if($selectRes)
//         {
//             $itemRequestString .= $itemRequestArray[$i];
//             $itemQuantityString .= $itemQuantityArray[$i];
            
//             if(($i+1) < count($itemRequestArray))
//             {
//                 $itemRequestString .= ", ";
//                 $itemQuantityString .= ", ";
//             } 
            
//         }
//         else
//         {      
//             $count=0;  
//             $validRequest=false;
//             break;   
//         }
        
        
//     } 
//     echo $count;

//     // if($validRequest == true)
//     // {
        
//     //     $insertSql= "INSERT into itemrequest(`description`,`amount`)
//     //     values('$itemRequestString','$itemQuantityString')";
//     //     $insertSqlRes= mysqli_query($conn,$insertSql);

//     //     echo '<script>alert("Your request is accepted.!");
//     //     location= "TeacherPage.html";
//     //         </script>';
//     // }
//     // else
//     // {
//     //     echo '<script>alert("Your request can not be accpeted due to shortage.!");
//     //     location= "TeacherPage.html";
//     //         </script>';


//     // }
 

// }
?>