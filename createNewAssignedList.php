<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:logInPage.html');
}

include('DatabaseConnection.php');

createGroupArray();
function keyOfCategory($str)
{
    return substr($str,3,2);

}
function CreateCategoricalArray($items)
{
    $array = [];
    foreach ($items as $item) 
    {
            $key = keyOfCategory($item);
            $array[$key][] = $item;
        
    }
    $suffled_group= suffleElementsOfEachCategory($array);

    //echo count($group);
    return $suffled_group;
    
}
function suffleElementsOfEachCategory($group)
{
    foreach($group as &$element) {
        shuffle($element);
    }
    return $group;
}

function createGroupArray()
{
    include('DatabaseConnection.php');
    $SelectSql= "SELECT `Academic_Roll` from userTable where Academic_Roll != ''";
    $Selectresult= mysqli_query($conn,$SelectSql); 
    
    while($row= mysqli_fetch_assoc($Selectresult))
    {
        $arr[]=$row['Academic_Roll'];
    }
    
    
    $maxSizeOfACategory=0;
    $array= CreateCategoricalArray($arr);
    foreach($array as $element)
    {
      if($maxSizeOfACategory < count($element))
      {
         $maxSizeOfACategory=count($element); 
      }
    }
    // echo $maxSizeOfACategory;
     
    $string="";
   $count=0;
    for($i=0; $i<$maxSizeOfACategory;$i++)
    {
        foreach($array as $element)
        {
            if(count($element) > $i)
            {
                $count++;
                $string= $string.$element[$i];

                if($count< count($array))
                {
                    $string= $string.", ";
                }
            }
            
        
        }
        $assignedRollArray[]= $string;
        // echo $string."<br>";
        $string="";
        $count=0;
    }
    
    insertAssignedRoll($assignedRollArray); 
}

function insertAssignedRoll($assignedRollArray)
{
    include('DatabaseConnection.php');
    $Sql= "select `PC_Id` from pc";
    $Selectresult= mysqli_query($conn,$Sql); 
    $arrayIndex=0;
    $truncateTable= "truncate table `pcassignedlist` ";
    mysqli_query($conn,$truncateTable);

    while($row= mysqli_fetch_assoc($Selectresult))
    {
        if($arrayIndex<count($assignedRollArray))
        {
            $pcId= $row['PC_Id'];
            //echo $pcId."  ".$assignedRollArray[$arrayIndex]."<br>";
            $insertSql= "insert into pcassignedlist (`PC_Id`,`Assigned_roll`)
            values ('$pcId','$assignedRollArray[$arrayIndex]')";
            mysqli_query($conn,$insertSql);
            $arrayIndex++;
        }
    
    }
}


echo '<script>alert("Student rolls are successfully assigned to lab Pcs");
    location="AssignPcForLabAssistant.php";
   </script>';





?>

