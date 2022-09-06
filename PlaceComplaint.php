<?php
include('DatabaseConnection.php');

if (isset($_POST["submit"])){
   
    $Student_ID = $_POST["StudentID"];
    $PC_ID = $_POST["PCID"];
    $Description = $_POST["description"];
    
    
    $sql = "INSERT INTO placecomplaint (Student_ID, PC_ID, Description) VALUES ('$Student_ID', '$PC_ID', '$Description')";

    if(mysqli_query($conn, $sql)){
       
      echo '<script>alert("Complaint Placed Succesfully!");
        location="StudentPage.html";
        </script>';
        
    }
    else {
        
    }
    
}

?>




