<?php
include('DatabaseConnection.php');

if (isset($_POST["submit"])){
   
    $Student_ID = $_POST["StudentID"];
    $PC_ID = $_POST["PCID"];
    $Description = $_POST["description"];
    $flag= false;
    
    $fetchSql= "select * from pcassignedlist";
    $fetchResult=mysqli_query($conn, $fetchSql)
    
    while($row=mysqli_fetch_assoc($fetchResult))
    {
      if(($row['PC_Id']==$PC_ID) && ($row['Assigned_roll']==$PC_ID))
      {
        $insertsql = "INSERT INTO placecomplaint (Student_ID, PC_ID, Description) 
        VALUES ('$Student_ID', '$PC_ID', '$Description')";
        mysqli_query($conn, $insertsql)
        echo '<script>alert("Complaint Placed Succesfully!");
        location="StudentPage.html";
        </script>';

      }
        
    
    }
    
    else {
        
    }
    
}

?>




