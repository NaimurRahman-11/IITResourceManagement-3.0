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

<link rel="stylesheet" href="Resources.css">

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
    <a href="TeacherPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div> -->



              <!-- Bootstrap dynamic toggolable pills starts from here -->
              <br>
              <div class="mb-3">
                <div class="toggolable">
                  <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link active text-dark" href="#stationaryItems">Stationary Items</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link text-dark" href="#personalItems">Personal Items</a></li>
                  </ul><br>

                  <div class="tab-content center">
                    <div id="stationaryItems" class="tab-pane active">
                      <!-- Stationary Table will be added here -->
                      
                    
                      <table>

                      <tr>
                        <th>ID</th>
                        <th>Stationary Type</th>
                        <th>Amount</th>
                      
                      </tr>

                      <?php
                      include('DatabaseConnection.php');

                      $sql = "SELECT * From resource where ItemCategory='stationary'";

                      $res = mysqli_query($conn, $sql);

                      if($res==true){

                        $count = mysqli_num_rows($res);

                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $StationaryType = $rows['ItemName'];
                                $amount = $rows['amount'];      

                        ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $StationaryType; ?> </td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        
                                    </tr>

                                <?php
                            }
                        }

                      }

                      ?>         


                      </table>
                    

                    </div>




                    <div id="personalItems" class="tab-pane fade">
                      <!-- Personal Table will be added here -->
                      <table>

                      <tr>
                        <th>ID</th>
                        <th>Stationary Type</th>
                        <th>Amount</th>
                      
                      </tr>

                      <?php
                      include('DatabaseConnection.php');

                      $sql = "SELECT * From resource where ItemCategory='personal'";

                      $res = mysqli_query($conn, $sql);

                      if($res==true){

                        $count = mysqli_num_rows($res);

                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $PersonalType = $rows['ItemName'];
                                $amount = $rows['amount'];      

                        ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $PersonalType; ?> </td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        
                                    </tr>

                                <?php
                            }
                        }

                      }

                      ?>         


                      </table>
                    </div>


                    

                  </div>
                </div>
              </div>
              <!-- Bootstrap dynamic toggolable pills ends here -->
    
           



   
</body>


</html>  
