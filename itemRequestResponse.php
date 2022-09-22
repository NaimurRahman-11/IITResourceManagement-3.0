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
  </nav> <br>

<!-- Navigation Bar Ends -->
  
  
    

    
    
    
  <?php
  session_start();
  if(!isset($_SESSION['email']))
  {
      header('location:logInPage.html');
  }
    include('DatabaseConnection.php');

    $fetchItemRequestSql= "SELECT * from itemrequest where itemRequeststatus = 'pending'";
    $fetchItemRequestResult= mysqli_query($conn,$fetchItemRequestSql);
    
    
    
    if(mysqli_num_rows($fetchItemRequestResult) > 0)
    {
        ?>
        <table>
            <tr>
            <th>Id</th>
            <th>Teacher</th>
            <th>Requested items</th>
            <th>Amount</th>
            <th>Actions</th>
            </tr>
        <?php
            while($row= mysqli_fetch_assoc($fetchItemRequestResult))
            {      
                $id=$row['id'];
                $TeacherName=$row['teacherName'];
                $Description=$row['description'];
                $amount= $row['amount'];
                    
        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $TeacherName; ?> </td>
                            <td><?php echo $Description; ?></td>
                            <td><?php echo $amount; ?></td>
                            <td>
                            <a href="acceptItemRequestResponse.php?AcceptRequestId=<?php echo $id; ?>" class="update-button">Accept</a> 
                            <a href="stockOutItemRequest.php?rejectRequestId=<?php echo $id; ?>" class="delete-button">Stock out</a>
                            </td>
                        </tr>
            
        <?php   
            }
            }
            else
            {
            echo '<script>alert("No request to show.!");
            </script>';
            }
        
        ?>
            
            
            </table>

    
</body>


</html>