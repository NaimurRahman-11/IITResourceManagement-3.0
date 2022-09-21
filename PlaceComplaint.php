<?php
include('DatabaseConnection.php');

session_start();
   
    $Student_ID = $_SESSION['roll'];
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
        $updatePcStatusAndNoOfComplaints= "update pc set PC_status='Under Maintenance', NoOfComplaints= NoOfComplaints+1
        where PC_Id=$PC_ID";
        mysqli_query($conn, $updatePcStatusAndNoOfComplaints);
        
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
    
    

function validateRoll($rollList, $roll)
{
  $flag= false;
  $rollListArray[]=explode(", ",$rollList);
  for($i=0; $i<count($rollListArray[0]); $i++)
  {
   if(strcasecmp($rollListArray[0][$i],$roll) == 0)
    {
      $flag= true;
      break;
    }
}
  return $flag;
}

?>




