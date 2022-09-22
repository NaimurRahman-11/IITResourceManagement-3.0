<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Complaints</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="ManageComplaints.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>

<!-- Navigation Bar Starts -->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="LabAssistantPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Lab Assistant's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="LabAssistantPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav><br>
<!-- Navigation Bar Ends -->
  
  <!-- <div class="header">
    <h1>Manage Complaints</h1>
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    
  <table>

  <tr>
    <th>Complaint No</th>
    <th>Student ID</th>
    <th>PC ID</th>
    <th>Description</th>
    <th>Date & Time</th>
    <th>Actions</th>
  </tr>

  <?php
  include('DatabaseConnection.php');
  session_start();
  if(!isset($_SESSION['email']))
  {
      header('location:logInPage.html');
  }

  $sql = "SELECT * From placecomplaint where complaintStatus= 'pending'
  ORDER BY Complaint_No DESC";

  $res = mysqli_query($conn, $sql);

  if($res==true){

    $count = mysqli_num_rows($res);

    if($count>0){
        while($rows = mysqli_fetch_assoc($res)){
            $Complaint_No = $rows['Complaint_No'];
            $Student_ID = $rows['Academic_Roll'];
            $PC_ID = $rows['PC_Id'];
            $Description = $rows['Description'];
            $Date = $rows['Date'];       

    ?>

                <tr>
                    <td><?php echo $Complaint_No; ?></td>
                    <td><?php echo $Student_ID; ?> </td>
                    <td><?php echo $PC_ID; ?></td>
                    <td><?php echo $Description; ?></td>
                    <td><?php echo $Date; ?></td>
                    <td>
                        <a href="DeleteComplaints.php?id=<?php echo $Complaint_No; ?>" class="trash-button">Trash</a>
                        <a href="SolvedComplaints.php?idd=<?php echo $Complaint_No; ?>" class="accept-button">Resolved</a>
                    </td>
                </tr>

            <?php
        }
    }

}

  ?>         


  </table>
  
     
</body>

</html>



