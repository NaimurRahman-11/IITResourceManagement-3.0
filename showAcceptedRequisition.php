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

<!-- Navigation Bar Starts -->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="TeacherPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Teacher's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="TeacherPage.html" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
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
    <h1>Teacher's Dashboard</h1> 
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->
    

  <form action="giveFeedback.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <input type="hidden" name="feedbackId" id="feedbackId">

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter Your feedback:</label>
                <input type="text" class="form-control" id="feedback" name="feedback">
              </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Submit" name="Search" id="Search">
          </div>
        </div>
      </div>
    </div>
   </form>



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
    
     
    
    
    
    
    // if(mysqli_num_rows($fetchRequisition) > 0)
    // {
  ?>
  <table>
    <tr>
      <th>Id</th>
      
      <th>Items</th>
      <th>Description</th>
      <th>Date</th>
      <th>Feedback</th>
      <th>Action</th>
    </tr>
  <?php
    include('DatabaseConnection.php');
      $name=returnName();

      $sql= "select * from acceptedRequisition where TeacherName= '$name'";
      $fetchRequisition= mysqli_query($conn,$sql);
      while($row= mysqli_fetch_assoc($fetchRequisition))
      {      
        $id=$row['id'];
        
        $ItemName=$row['ItemName'];
        $Description= $row['Description'];
        $date= $row['date_of_commencement'];
        $feedback=$row['feedback'];    

  ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    
                    <td><?php echo $ItemName; ?></td>
                    <td><?php echo $Description; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $feedback; ?></td>
                    <td>
                    <button type="button" class="btn btn-success feedbackbtn"> Give feedback</button>
                    </td>
                </tr>
      
  <?php 
         
          
      }
    // }
    // else
    // {
    //   echo '<script>alert("You have no accepted requisition!");
    //   </script>';
    // }
   
  ?>
    
      
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
    <script>
        $(document).ready(function () {

            $('.feedbackbtn').on('click', function () {

                $('#exampleModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#feedbackId').val(data[0]);

            });
        });
    </script>
 <script>   
</body>


</html>