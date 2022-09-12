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
    <h1>Office Assistant's Dashboard</h1> 
    <a href="OfficeAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
    

<table>

<tr>
  <th>Id</th>
  <th>File Name</th>
  <th>File Location</th>
  
</tr>


<?php
    include('DatabaseConnection.php');
    
    $fileName=$_POST['fileName'];
    $fileName= '/'.$fileName.'/i';

    $sql= "select * from file";
    $fetchfile= mysqli_query($conn,$sql);
    $countFileMatch=0;
    
    if(mysqli_num_rows($fetchfile) > 0)
    {
      while($row= mysqli_fetch_assoc($fetchfile))
      {
        if(preg_match($fileName,$row['FileName']))
        {
          $countFileMatch++;      
          $id=$row['id'];
          $FileName=$row['FileName'];
          $FileLocation=$row['FileLocation'];
              
  ?>
          <tr>
              <td><?php echo $id; ?></td>
              <td><?php echo $FileName; ?> </td>
              <td><?php echo $FileLocation; ?></td>                    
          </tr>
      
  <?php 
        }    
      }
      if($countFileMatch == 0)
      {
        echo '<script>alert("We have not found any result of our search.!");
        location="ManageFiles.php";
        </script>';
      }
    }
    else
    {
      echo '<script>alert("We have not found any result of our search.!");
      location="ManageFiles.php";
      </script>';
    }
   
  ?>
    
  
</table>
    
</body>
</html>




