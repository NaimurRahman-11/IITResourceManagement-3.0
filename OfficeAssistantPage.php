<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Assistant's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="OfficeAssistantPage.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
<?php
  session_start();
  if(!isset($_SESSION['email']))
  {
      header('location:logInPage.html');
  }
  ?>
  <!-- Navigation Bar Starts -->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="OfficeAssistantPage.html"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Office Assistant's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="OfficeAssistantPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<!-- Navigation Bar Ends -->
  
  <!-- <div class="header">
    <h1>Office Assistant's Dashboard</h1> 
    <a href="OfficeAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    

    <!-- Bootstrap Cards Starts From Here -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0" id="ManageFiles">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
                <i class="fa-solid fa-file fa-5x center"></i>
              <a href="ManageFiles.php" class="btn btn-primary" id="ManageFilesButton">Manage Files</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="SeeRequests">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
                <i class="fa-solid fa-file-circle-plus fa-5x center"></i>
              <a href="itemRequestResponse.php" class="btn btn-primary" id="SeeRequestsButton">See Requests</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="Resources">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-boxes-packing fa-5x center"></i>
                <a href="UpdateResources.php" class="btn btn-primary" id="ResourcesButton">Resources</a>
              </div>
            </div>
          </div>




          <div class="col-sm-4 py-3 py-sm-0" id="Requisitions">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-envelope-open-text fa-5x center"></i>
                <a href="requisitionResponse.php" class="btn btn-primary" id="RequisitionsButton">Requisitions</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 py-3 py-sm-0" id="Requisitions">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-user-tie fa-5x center"></i>
                <a href="ManageUsers.php" class="btn btn-primary" id="ApprovedUsersButton">Approved Users</a>
              </div>
            </div>
          </div>


      </div>
    </div>
    <!-- Bootstrap Cards Ends Here -->
  

    
</body>

<footer class="footer">
  <p>© 2022 Institute of Information Technology, NSTU | All Rights Reserved.</p>
</footer>

</html>