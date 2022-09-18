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

<link rel="stylesheet" href="Resources.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
  
  <div class="header">
    <h1>Office Assistant's Dashboard</h1> 
    <a href="OfficeAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>

  <form action="AddResource.php" method="post">
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="mb-3">
                <label for="YourID" class="col-form-label">Resource ID:</label>
                <input type="text" class="form-control" id="FileName" name="ResourceID">
              </div>

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter the increased Amount:</label>
                <input type="text" class="form-control" id="FileLocation" name="increasedAmount">
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

   <form action="DecreaseResource.php" method="post">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="mb-3">
                <label for="YourID" class="col-form-label">Resource ID:</label>
                <input type="text" class="form-control" id="FileName" name="ResourceID">
              </div>

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter the decreased Amount:</label>
                <input type="text" class="form-control" id="FileLocation" name="decreasedAmount">
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



              <!-- Bootstrap dynamic toggolable pills starts from here -->
              <br>
              <div class="mb-3">
                <div class="toggolable">
                  <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link active" href="#stationaryItems">Stationary Items</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link" href="#personalItems">Personal Items</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link" href="#furnitures">Furnitures</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link" href="#electronics">Electric & Electronics</a></li>
                  </ul><br>

                  <div class="tab-content center">
                    <div id="stationaryItems" class="tab-pane active">
                      <!-- Stationary Table will be added here -->
                      
                      <table>

                        <tr>
                          <th>ID</th>
                          <th>Stationary Type</th>
                          <th>Amount</th>
                          <th>Actions</th>
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
                                          
                                          <td>
                                              <a href="#" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Add</a>
                                              <a href="#" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Decrease</a>
                                          </td>
                                      </tr>

                                  <?php
                              }
                          }

                        }

                        ?>         


                    </table>

                    </div>


                    <div id="furnitures" class="tab-pane">
                        <!-- Furniture Table will be added here -->
                        <table>

                      <tr>
                        <th>ID</th>
                        <th>Furniture Type</th>
                        <th>Amount</th>
                        <th>Actions</th>
                      </tr>
                      
                      <?php
                      include('DatabaseConnection.php');

                      $sql = "SELECT * From resource where ItemCategory='furniture'";

                      $res = mysqli_query($conn, $sql);

                      if($res==true){

                        $count = mysqli_num_rows($res);

                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $FurnitureType = $rows['ItemName'];
                                $amount = $rows['amount'];      

                        ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $FurnitureType; ?> </td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        <td>
                                            <a href="#" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Add</a>
                                            <a href="#?>" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Decrease</a>
                                            
                                        </td> 
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
                        <th>Personal Items Type</th>
                        <th>Amount</th>
                        <th>Actions</th>
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
                                $personalItemsType = $rows['ItemName'];
                                $amount = $rows['amount'];      

                        ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $personalItemsType; ?> </td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        <td>
                                            <a href="#" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Add</a>
                                            <a href="#?>" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Decrease</a>
                                            
                                        </td>
                                    </tr>

                                <?php
                            }
                        }

                      }

                      ?>         


                      </table>
                    </div>


                    <div id="electronics" class="tab-pane fade">
                        <!-- Electronic Table will be added here -->

                        <table>

                      <tr>
                        <th>ID</th>
                        <th>Electric Or Electronic Type</th>
                        <th>Amount</th>
                        <th>Actions</th>
                      </tr>
                      
                      <?php
                      include('DatabaseConnection.php');

                      $sql = "SELECT * From resource where ItemCategory='electricOrElectronic'";

                      $res = mysqli_query($conn, $sql);

                      if($res==true){

                        $count = mysqli_num_rows($res);

                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $ELectricOrElectronicType = $rows['ItemName'];
                                $amount = $rows['amount'];      

                        ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $ELectricOrElectronicType; ?> </td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        <td>
                                            <a href="#>" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Add</a>
                                            <a href="#>" class="update-button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Decrease</a>
                                            
                                        </td>
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
    
           


  <script>
    function markerVisible(){
      var checkBox1 = document.getElementById("marker");
      var checkBox2 = document.getElementById("duster");
      var checkBox3 = document.getElementById("pen");
      var checkBox4 = document.getElementById("A4Paper");
      var checkBox5 = document.getElementById("tissue");
      var checkBox6 = document.getElementById("waterBottle");
      var checkBox7 = document.getElementById("airFreshner");
  
      if(checkBox1.checked == true){
        document.getElementById("markerQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox2.checked == true){
        document.getElementById("dusterQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox3.checked == true){
        document.getElementById("penQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox4.checked == true){
        document.getElementById("A4PaperQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox5.checked == true){
        document.getElementById("tissueQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox6.checked == true){
        document.getElementById("waterBottleQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
  
      if(checkBox7.checked == true){
        document.getElementById("airFreshnerQuantity").innerHTML = '<label for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="5">';
      }
    }
  </script>    
</body>
</html>  