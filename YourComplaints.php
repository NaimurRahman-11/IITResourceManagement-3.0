<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="YourComplaints.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>

 <!-- Navigation Bar Starts -->
 <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="StudentPage.html"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Student's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="StudentPage.html" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logInPage.html"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <br>
<!-- Navigation Bar Ends -->
  
  <!-- <div class="header">
    <h1>Student's Dashboard</h1>
    <a href="StudentPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
  <table>

  <tr>
        <th> Complaint_No </th>
        <th> Student_ID </th>
        <th> PC_ID </th>
        <th> Description </th>
        <th> Date </th>
        <th> Action </th>
        </tr>
 <?php

session_start();
function returnId()
{
  if(isset($_POST['YourID']))
  {
    $_SESSION['YourID']=$_POST['YourID'];

  }
  return $_SESSION['YourID'];
}
 ?>

<?php
include('DatabaseConnection.php');


   
    $Your_ID = returnId();
    
    $fetchRollSql="SELECT `Academic_roll` from student where Academic_roll= '$Your_ID'";
    $fetchComplaintsSql = "SELECT * FROM placecomplaint WHERE Student_ID = '$Your_ID'";

    $fetchComplaintsSqlresult = mysqli_query($conn,$fetchComplaintsSql);

    $fetchRollSqlResult= mysqli_query($conn,$fetchRollSql);

     
    if(mysqli_num_rows($fetchRollSqlResult) > 0)
    {
      if(mysqli_num_rows($fetchComplaintsSqlresult) > 0)
      {
?>        
           
      
<?php    

        while ($row = $fetchComplaintsSqlresult->fetch_assoc()) 
        {

          $Complaint_No=$row['Complaint_No'];
          $Student_ID= $row['Student_ID'];
          $PC_ID=$row['PC_ID'];
          $Description=$row['Description'];
          $Date =$row['Date'];
?>   
          <tr>
              <td><?php echo $Complaint_No?> </td>
              <td> <?php echo $Student_ID?> </td>
              <td> <?php echo $PC_ID?> </td>
              <td> <?php echo $Description?></td>
              <td> <?php echo $Date?> </td>

              <td>
              <a href="cancelComplaints.php?id=<?php echo $Complaint_No; ?>" class='trash-button'>Cancel</a>
              </td>
              </tr>    
<?php           
        }
     
?> 

<?php  

    }
    else
    {
      echo '<script>alert("You have no complaints to see!");
      
      </script>';
    } 
  }
else 
{
echo '<script>alert("Your roll number is wrong.!");
location:StudentPage.html
</script>';
}   
?>
</table>   
</body>

<footer class="footer">
  <p>© 2022 Institute of Information Technology, NSTU | All Rights Reserved.</p>
</footer>

</html>


