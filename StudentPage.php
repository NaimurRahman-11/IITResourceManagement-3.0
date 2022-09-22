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

<link rel="stylesheet" href="StudentPage.css">

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
      <a class="navbar-brand" href="StudentPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Student's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="StudentPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
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
    <h1 class="text">Student's Dashboard</h1>
    <a href="StudentPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    

    <!-- Bootstrap Cards Starts From Here -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0" id="PlaceComplaintCard">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
              <i class="fa-solid fa-message fa-5x center"></i>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Place Complaint</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="YourComplaintsCard">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
              <i class="fa-solid fa-eye fa-5x center"></i>
              <a href="YourComplaints.php" class="btn btn-primary" >Your Complaints</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="SeeAssignedPCCard">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
              <i class="fa-solid fa-desktop fa-5x center"></i>
              <a href="AssignedPcLIstOfStudents.php" class="btn btn-primary">See Assigned PC</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap Cards Ends Here -->


    <!-- Bootstrap Modal Starts From Here -->
    
    <form action="PlaceComplaint.php" method="post">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Place Your Complaint Here!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          

          <div class="mb-3">
            <label for="pcId" class="col-form-label">PC ID:</label>
            <input type="number" class="form-control" id="pcId" name="PCID" required>
          </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Describe your complaint:</label>
            <textarea class="form-control" id="messageText" name="description" required></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
      </div>
    </div>
  </div>
</div>
</form>
     <!-- Bootstrap Modal Ends Here -->



     <!-- Your Complaints Page Modal Starts here -->
    
     <!-- <form action="YourComplaints.php" method="post">
     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             
               <div class="mb-3">
                 <label for="YourID" class="col-form-label">Enter Your ID:</label>
                 <input type="text" class="form-control" id="YourID" name="YourID">
               </div>
             
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <input type="submit" class="btn btn-primary" value="Submit" name="submit2" id="submit2">
           </div>
         </div>
       </div>
     </div>
    </form> -->

     <!-- Your Complaints Page Modal Ends here -->

     
</body>

<footer class="footer">
  <p>© 2022 Institute of Information Technology, NSTU | All Rights Reserved.</p>
</footer>
</html>