<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="DirectorPage.css">

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
      <a class="navbar-brand" href="DirectorPage.html"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Director's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="DirectorPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
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
    <h1>Director's Dashboard</h1> 
    <a href="DirectorPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    

    <!-- Bootstrap Cards Starts From Here -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0" id="announcement">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
              <i class="fa-solid fa-scroll fa-5x center"></i>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary" id="announcementButton">Announcement</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="RequestItem">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
              <i class="fa-solid fa-user-tie fa-5x center"></i>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" id="RequestItemButton">Add Assistant</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="SeeResources">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-boxes-packing fa-5x center"></i>
                <a href="DirSeeResources.php" class="btn btn-primary" id="seeResourcesButton">See Resources</a>
              </div>
            </div>
          </div>



      </div>
    </div>
    <!-- Bootstrap Cards Ends Here -->

     <!-- Add Assistant Page Modal Starts here -->
    
     <form action="addAssistant.php" method="post">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
 
            <div class="mb-3">
            <label for="type">Assistant Type:</label>
 
               <select name="type" id="type" name="type">
               <option disabled selected value> -Select a type- </option>
               <option> Office Assistant </option>
               <option> Lab Assistant </option>
               </select>
            </div>
              
                <div class="mb-3">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                </div>

                <div class="mb-3">
                  <label for="email" class="col-form-label">Password:</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Add" name="submit2" id="submit2">
            </div>
          </div>
        </div>
      </div>
     </form>
 
      <!-- Add Assistant Page Modal Ends here -->


       <!-- Announcement Page Modal Starts here -->
    
     <form action="" method="post">
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
                <div class="mb-3">
                  <label for="announcement" class="col-form-label">Enter Announcement:</label><br>
                  <textarea name="announcement" rows="4" cols="50" placeholder="Write your announcement here...."></textarea>
                </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Notify" name="submit2" id="submit2">
            </div>
          </div>
        </div>
      </div>
     </form>
 
      <!-- Announcement Page Modal Ends here -->
  

    
</body>

<footer class="footer">
  <p>© 2022 Institute of Information Technology, NSTU | All Rights Reserved.</p>
</footer>

</html>