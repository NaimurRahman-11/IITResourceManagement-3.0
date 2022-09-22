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

<link rel="stylesheet" href="ManageFiles.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>

 <!-- Navigation Bar Starts -->
 <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="OfficeAssistantPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
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
  
  

<div class="buttons text-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add File</button>&nbsp; &nbsp;
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Search File</button>
</div>
<br>

<!-- Add File Modal Starts here -->
    
<form action="addFile.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">File Name:</label>
                <input type="text" class="form-control" id="FileName" name="FileName" required>
              </div>

              <div class="mb-3">
                <label for="YourID" class="col-form-label">File Category:</label>
                <input type="text" class="form-control" id="FileCategory" name="FileCategory" required>
              </div>

              <div class="mb-3">
                <label for="YourID" class="col-form-label">File Location:</label>
                <input type="text" class="form-control" id="FileLocation" name="FileLocation" required>
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Add" name="add" id="add">
          </div>
        </div>
      </div>
    </div>
   </form>

    <!-- Add File Modal Ends here -->

    <!-- Search File Modal Starts here -->
    
<form action="searchFile.php" method="post">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">File Name:</label>
                <input type="text" class="form-control" id="FileName" name="fileName" required>
              </div>

            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Search" name="Search" id="Search">
          </div>
        </div>
      </div>
    </div>
   </form>

    <!-- Search File Modal Ends here -->
    

    <form action="UpdateFileLocation.php" method="post">
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- <div class="mb-3">
                <label for="YourID" class="col-form-label">File ID:</label>
                <input type="text" class="form-control" id="FileName" name="fileID">
              </div> -->
              <input type="hidden" name="updateId" id="updateId">
            
            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter Updated File Location:</label>
                <input type="text" class="form-control" id="FileLocation" name="FileLocation" required>
              </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Update" name="Search" id="Search">
          </div>
        </div>
      </div>
    </div>
    
   </form>
   <form action="DeleteFileInfo.php" method="post">
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- <div class="mb-3">
                <label for="YourID" class="col-form-label">File ID:</label>
                <input type="text" class="form-control" id="FileName" name="fileID">
              </div> -->
              <input type="hidden" name="deleteId" id="deleteId">
            
            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Do You Really Want To Delete This File?</label>
                
              </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Delete" name="Search" id="Search">
          </div>
        </div>
      </div>
    </div>
   </form>
    
    
  <?php
     include('DatabaseConnection.php');
    
  
    
    $sql= "select * from file";
    $fetchfile= mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($fetchfile) > 0)
    {
  ?>
  <table>
    <tr>
      <th>Id</th>
      <th>File Name</th>
      <th>File Location</th>
      <th>File Category</th>
      <th>Date</th>
      <th>Actions</th>
    </tr>
  <?php
      while($row= mysqli_fetch_assoc($fetchfile))
      { 

        $id=$row['id'];
        $FileName=$row['FileName'];
        $FileLocation=$row['FileLocation'];
        $FileCategory=$row['FileCategory'];
        $Date=$row['Date'];
              
  ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $FileName; ?> </td>
                    <td><?php echo $FileLocation; ?></td>
                    <td><?php echo $FileCategory; ?></td>
                    <td><?php echo $Date; ?></td>
                    <td>
                      
                      <button type="button" class="btn btn-danger deletebtn">Delete</button>
                      <button type="button" class="btn btn-success updatebtn"> Update Location</button>

                    </td>
                </tr>
      
  <?php   
      }
    }
    else
    {
      echo '<script>alert("No file info to show.!");
      </script>';
    }
   
  ?>
    
      
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
    <script>
        $(document).ready(function () {

            $('.updatebtn').on('click', function () {

                $('#exampleModal3').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#updateId').val(data[0]);

            });
        });
    </script>
 <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#exampleModal4').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deleteId').val(data[0]);

            });
        });
    
      </script>  
</body>

      

</html>