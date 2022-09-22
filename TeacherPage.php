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

<link rel="stylesheet" href="TeacherPage.css">

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
      <a class="navbar-brand" href="TeacherPage.html"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Teacher's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="TeacherPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
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
    <h1>Teacher's Dashboard</h1> 
    <a href="TeacherPage.php"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    

    <!-- Bootstrap Cards Starts From Here -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0" id="RequestItem">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
                <i class="fa-solid fa-pen-ruler fa-5x center"></i>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" id="RequestItemButton">Request Item</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="PlaceRequisition">
          <div class="card box-shadow" style="width: 18rem;">
            <div class="card-body">
                <i class="fa-solid fa-file-circle-plus fa-5x center"></i>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="PlaceRequisitionButton">Place Requisition</a>
            </div>
          </div>
        </div>


        <div class="col-sm-4 py-3 py-sm-0" id="SeeResources">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-boxes-packing fa-5x center"></i>
                <a href="SeeResourcesForTeachers.php" class="btn btn-primary" id="SeeResourcesButton">See Resources</a>
              </div>
            </div>
          </div>




          <div class="col-sm-4 py-3 py-sm-0" id="RequestStatus">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-stopwatch fa-5x center"></i>
                <a href="ItemRequestStatus.php" class="btn btn-primary" id="RequestStatusButton">Request Status</a>
              </div>
            </div>
          </div>



          <div class="col-sm-4 py-3 py-sm-0" id="RequestStatus">
            <div class="card box-shadow" style="width: 18rem;">
              <div class="card-body">
                <i class="fa-solid fa-box-open fa-5x center"></i>
                <a href="YourRequisition.php" class="btn btn-primary"  id="RequestStatusButton">Your Requisitions</a>
              </div>
            </div>
          </div>




      </div>
    </div>
    <!-- Bootstrap Cards Ends Here -->
  
    <!-- Bootstrap Place Requisition Modal Starts Here -->
    
    <form action="PlaceRequisitionForTeacher.php" method="post">

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Place Your Requisition Here!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <!-- <div class="mb-3">
                  <label for="student-id" class="col-form-label">Teacher's Name:</label>
                  <input type="text" class="form-control" id="StudentID" name="teacherName">
                </div> -->
                
                <div class="mb-3">
                  <label for="pcId" class="col-form-label">Item Name:</label>
                  <input type="text" class="form-control" id="pcId" name="itemName">
                </div>
      
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Reason For The Requisition:</label>
                  <textarea class="form-control" id="messageText" name="description" placeholder="Describe within 300 words..."></textarea>
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
      <!-- Bootstrap Place Requisition Ends Here -->
    

 <!-- Bootstrap for your requisition Modal Starts Here -->
    <!-- <form action="YourRequisition.php" method="post">

      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">See your submitted requisition here!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="mb-3">
                  <label for="student-id" class="col-form-label">Teacher's Name:</label>
                  <input type="text" class="form-control" id="StudentID" name="teacherName">
                </div>
                
                
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
            </div>
          </div>
        </div>
      </div>
      </form> -->
    <!-- Bootstrap for your requisition Ends Here -->

    <!-- Bootstrap Item Request Modal Starts Here -->
    <form action="ItemRequest.php" method="post">

      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Place Your Item Request Here!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <!-- <div class="mb-3">
                  <label for="student-id" class="col-form-label">Teacher's Name:</label>
                  <input type="text" class="form-control" id="studentId" name="StudentID">
                </div> <br> -->



                <!-- Bootstrap dynamic toggolable pills starts from here -->
                <div class="mb-3">
                  <div class="toggolable">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a data-bs-toggle="pill" class="nav-link active text-dark" href="#stationaryItems">Stationary Items</a></li>
                      <li class="nav-item"><a data-bs-toggle="pill" class="nav-link text-dark" href="#personalItems">Personal Items</a></li>
                    </ul><br>

                    <div class="tab-content">
                      <div id="stationaryItems" class="tab-pane active">
                        <input type="checkbox" onclick="markerQuantity()" id="marker" name="marker" value="marker">
                        <label for="marker">Marker</label> &nbsp;
                        <input type="number" style="display: none;" id="quantity" class="text-center quantity-border-radius" name="markerQuantitybox" min="1" max="500"> <br> <br>

                        

                        <input type="checkbox" onclick="markerQuantity()" id="pen" name="pen" value="pen">
                        <label for="pen">Pen</label> &nbsp;
                        <input type="number" style="display: none;" class="text-center quantity-border-radius" id="penQuantity" name="penQuantitybox" min="1" max="500"> <br><br>

                        
                        

                        <input type="checkbox" onclick="markerQuantity()" id="A4Paper" name="A4Paper" value="A4Paper">
                        <label for="A4Paper">A4 Paper</label> &nbsp;
                        <input type="number" style="display: none;" class="text-center quantity-border-radius" id="A4PaperQuantity" name="A4PaperQuantitybox" min="1" max="500">


                      </div>

                      <div id="personalItems" class="tab-pane fade">
                        <input type="checkbox" onclick="markerQuantity()" id="tissue" name="tissue" value="tissue">
                        <label for="tissue"> Tissue Box</label> &nbsp;
                        <input type="number" style="display: none;" class="text-center quantity-border-radius" id="tissueQuantity" name="tissueQuantitybox" min="1" max="500"> <br><br>

                       
                        <input type="checkbox" onclick="markerQuantity()" id="airFreshner" name="airFreshner" value="airFreshner">
                        <label for="airFreshner">Air Freshner</label> &nbsp;
                        <input type="number" style="display: none;" class="text-center quantity-border-radius" id="airFreshnerQuantity" name="airFreshnerQuantitybox" min="1" max="500">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap dynamic toggolable pills ends here -->
      
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
            </div>
          </div>
        </div>
      </div>
      </form>
    <!-- Bootstrap Item Request Modal Ends Here -->
    
    
    <script>
      function markerQuantity(){
        var checkBox1 = document.getElementById("marker");
        var text1 = document.getElementById("quantity");

        if(checkBox1.checked == true){
          text1.style.display= "inline-block";
        }

        else{
          text1.style.display= "none";
        }
        
        var checkBox2 = document.getElementById("pen");
        var text2 = document.getElementById("penQuantity");

        if(checkBox2.checked == true){
          text2.style.display= "inline-block";
        }
        
         else{
           text2.style.display= "none";
        }


        var checkBox3 = document.getElementById("A4Paper");
        var text3 = document.getElementById("A4PaperQuantity");

        if(checkBox3.checked == true){
          text3.style.display= "inline-block";
        }

        else{
          text3.style.display= "none";
        }

        var checkBox4 = document.getElementById("tissue");
        var text4 = document.getElementById("tissueQuantity");

        if(checkBox4.checked == true){
          text4.style.display= "inline-block";
        }

        else{
          text4.style.display= "none";
        }

        var checkBox5 = document.getElementById("airFreshner");
        var text5 = document.getElementById("airFreshnerQuantity");

        if(checkBox5.checked == true){
          text5.style.display= "inline-block";
        }

        else{
          text5.style.display= "none";
        }



      }



    </script>

   
</body>

<footer class="footer">
  <p>© 2022 Institute of Information Technology, NSTU | All Rights Reserved.</p>
</footer>
</html>

 