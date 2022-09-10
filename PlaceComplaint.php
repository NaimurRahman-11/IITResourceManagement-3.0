<?php
include('DatabaseConnection.php');

if (isset($_POST["submit"])){
   
    $Student_ID = $_POST["StudentID"];
    $PC_ID = $_POST["PCID"];
    $Description = $_POST["description"];
    $flag= false;
    
    $fetchSql= "select * from pcassignedlist";
    $fetchResult=mysqli_query($conn, $fetchSql);
    
    while($row=mysqli_fetch_assoc($fetchResult))
    {
      if(($row['PC_Id']==$PC_ID) && validateRoll($row['Assigned_roll'],$Student_ID))
      {
        $flag= true;
        $insertsql = "INSERT INTO placecomplaint (Student_ID, PC_ID, Description) 
        VALUES ('$Student_ID', '$PC_ID', '$Description')";
        mysqli_query($conn, $insertsql);
        echo '<script>alert("Complaint Placed Succesfully!");
        location="StudentPage.html";
        </script>';
        break;
      }
    }
    if(!$flag)
    {
      echo '<script>alert("your roll number or pc id is wrong!");
        location="StudentPage.html";
        </script>';
    
    }
    
}
function validateRoll($rollList, $roll)
{
  $flag= false;
  $rollListArray[]=explode(", ",$rollList);
  for($i=0; $i<count($rollListArray); $i++)
  {
    $string=$rollListArray[$i];
    if(strcasecmp($string,$roll) == 0)
    {
      $flag= true;
      break;
    }
  }

  return $flag;


}
?>




