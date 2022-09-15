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
  
  <div class="header">
    <h1>Student's Dashboard</h1>
    <a href="StudentPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
    

  <?php
include('DatabaseConnection.php');

if (isset($_POST["submit2"])){
   
    $Your_ID = $_POST["YourID"];
    
    $fetchRollSql="select `Academic_roll` from student where Academic_roll= '$Your_ID'";
    $fetchComplaintsSql = "SELECT * FROM placecomplaint WHERE Student_ID = '$Your_ID'";

    $fetchComplaintsSqlresult = mysqli_query($conn,$fetchComplaintsSql);

    $fetchRollSqlResult= mysqli_query($conn,$fetchRollSql);

     
    if(mysqli_num_rows($fetchRollSqlResult) > 0)
    {
      if(mysqli_num_rows($fetchComplaintsSqlresult) > 0)
      {
        echo "<table border=1>";
        echo "<tr>
        <td> Complaint_No </td>
        <td> Student_ID </td>
        <td> PC_ID </td>
        <td> Description </td>
        <td> Date </td>
        </tr>";
        while ($row = $fetchComplaintsSqlresult->fetch_assoc()) 
        {
          echo "<tr>
          <td> {$row['Complaint_No']} </td>
          <td> {$row['Student_ID']} </td>
          <td> {$row['PC_ID']} </td>
          <td> {$row['Description']} </td>
          <td> {$row['Date']} </td>
          </tr>";    
        }

      echo "</table>";  
      }
      else
      {
        echo '<script>alert("You have no complaints to see!");
        location="StudentPage.html";
        </script>';
      }
    }
    else 
    {
      echo '<script>alert("Your roll number is wrong.!");
      location="StudentPage.html";
      </script>';
    }
    

}
?>
     
</body>
</html>


