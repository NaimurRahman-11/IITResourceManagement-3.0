<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Lab resources</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="ManageComplaints.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>
  
  <div class="header">
    <h1>Manage Lab Resources</h1>
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
  <form action="AddLabEquipment.php" method="post">
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

   <form action="DecreaseLabEquipment.php" method="post">
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
    
  <table>

  <tr>
    <th>Id</th>
    <th>Lab Equipment Type </th>
    <th>Amount</th>
    <th>Actions</th>
  </tr>

  <?php
  include('DatabaseConnection.php');

  $sql = "SELECT * From resource where ItemCategory='lab'";

  $res = mysqli_query($conn, $sql);

  if($res==true){

    $count = mysqli_num_rows($res);

    if($count>0){
        while($rows = mysqli_fetch_assoc($res)){
            $id = $rows['id'];
            $LabEquipmentType = $rows['ItemName'];
            $amount = $rows['amount'];
               

    ?>

                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $LabEquipmentType; ?> </td>
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
  
     
</body>
</html>



