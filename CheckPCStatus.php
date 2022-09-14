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
  
  <div class="header">
    <h1>Lab Assistant's Dashboard</h1> 
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
    

<div class="buttons text-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add PC</button>&nbsp; &nbsp;
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Delete PC</button>
</div>
<br>


    <table>
    <tr>
      <th>Id</th>
      <th>PC ID</th>
      <th>PC Status</th>
      <th>No of complaints</th>
    </tr>
    
    
  <?php
    include('DatabaseConnection.php');
    
  
    
    $sql= "select * from pc";
    $fetchfile= mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($fetchfile) > 0)
    {
      while($row= mysqli_fetch_assoc($fetchfile))
      {      
        $id=$row['id'];
        $PC_Id=$row['PC_Id'];
        $PC_status=$row['PC_status'];
        $NoOfComplaints= $row['NoOfComplaints'];             
  ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $PC_Id; ?> </td>
                    <td><?php echo $PC_status; ?></td>
                    <td><?php echo $NoOfComplaints; ?></td>
                </tr>
      
  <?php 
         
          
      }
    }
    else
    {
      echo '<script>alert("No PC is added yet!");
      </script>';
    }
   
  ?>
    
      
    </table>

    
</body>
</html>