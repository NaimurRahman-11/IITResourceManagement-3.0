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

<link rel="stylesheet" href="updateLabEquipment.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>


<!-- Navigation Bar Starts -->
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="LabAssistantPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Lab Assistant's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="LabAssistantPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <br>

  <div class="text-center">
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal4"><input class="btn btn-primary" style="width: 150px;" type="button" value="Add Item Type"></a>
</div><br>
  
 
  <form action="AddLabEquipment.php" method="post">
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <input type="hidden" name="addId" id="addId">

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter the increased Amount:</label>
                <input type="number" class="form-control" id="FileLocation" name="increasedAmount" required>
              </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Add" name="Search" id="Search">
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

          <input type="hidden" name="decreaseId" id="decreaseId">

            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter the decreased Amount:</label>
                <input type="number" class="form-control" id="FileLocation" name="decreasedAmount" required>
              </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Decrease" name="Search" id="Search">
          </div>
        </div>
      </div>
    </div>
   </form>

   <!-- Modal for Add Item Category Starts Here -->
   <form action="addResourceItemType.php" method="post">
     <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">

           <div class="mb-3">
           <label for="cars">Item Category:</label>

              <select name="category" id="category" name="category">
              <option value="lab"selected value> Lab </option>
               
              </select>
           </div>
             
               <div class="mb-3">
                 <label for="YourID" class="col-form-label">Item Name:</label>
                 <input type="text" class="form-control" id="YourID" name="itemName" required>
               </div>
             
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <input type="submit" class="btn btn-primary" value="Add" name="submit2" id="submit2">
           </div>
         </div>
       </div>
     </div>
    </form>

    <!-- Modal for Add Item Category Ends Here -->
    
    <form action="deleteResourceItemType.php" method="post">
     <div class="modal fade" id="exampleModalnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">

           <div class="mb-3">
           
           </div>
           <input type="hidden" name="deleteId" id="deleteId">
             
               <div class="mb-3">
                 <label for="YourID" class="col-form-label">Do you really want to delete this item type?</label>
                 
               </div>
             
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <input type="submit" class="btn btn-primary" value="Delete" name="submit2" id="submit2">
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
                        
                    <button type="button" class="btn btn-success addbtn"> +</button>
                   <button type="button" class="btn btn-danger decreasebtn">-</button>
                   <button type="button" class="btn btn-danger deletebtn">Delete Item</button>
                    </td>
                </tr>

            <?php
        }
    }

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

            $('.addbtn').on('click', function () {

                $('#exampleModal1').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#addId').val(data[0]);

            });
        });
    </script>
 <script>
        $(document).ready(function () {

            $('.decreasebtn').on('click', function () {

                $('#exampleModal2').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#decreaseId').val(data[0]);

            });
        });
    
      </script>  
<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#exampleModalnew').modal('show');

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



