<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="ManageFiles.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
  
  <div class="header">
    <h1>Teacher's Dashboard</h1> 
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
    





<?php

session_start();
function returnName()
{
  if(isset($_POST['teacherName']))
  {
    $_SESSION['name']=$_POST['teacherName'];

  }
  return $_SESSION['name'];
}

 
?>
    
  <?php
    include('DatabaseConnection.php');
     
    $name=returnName();

    $sql= "select * from acceptedRequisition where TeacherName= '$name'";
    $fetchRequisition= mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($fetchRequisition) > 0)
    {
  ?>
  <table>
    <tr>
      <th>Id</th>
      <th>Teacher's Name</th>
      <th>Items</th>
      <th>Description</th>
      <th>Date</th>
      <th>Feedback</th>
      <th>Action</th>
    </tr>
  <?php
      
      while($row= mysqli_fetch_assoc($fetchRequisition))
      {      
        $id=$row['id'];
        $TeacherName=$row['TeacherName'];
        $ItemName=$row['ItemName'];
        $Description= $row['Description'];
        $date= $row['date_of_commencement'];
        $feedback=$row['feedback'];    

  ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $TeacherName; ?> </td>
                    <td><?php echo $ItemName; ?></td>
                    <td><?php echo $Description; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $feedback; ?></td>
                    <td>
                    <a href="#" class="cancel-button">Give feedback</a>
                    </td>
                </tr>
      
  <?php 
         
          
      }
    }
    else
    {
      echo '<script>alert("You have no accepted requisition!");
      </script>';
    }
   
  ?>
    
      
    </table>

    
</body>
</html>