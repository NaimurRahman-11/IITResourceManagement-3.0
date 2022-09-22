<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="YourComplaints.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>

 <!-- Navigation Bar Starts -->
 <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="StudentPage.php"><img src="./img/logo.png" width="50px" alt="logo"><span class="navbar-brand mr-2">IIT RESOURCE</span></a>
      <h1>Student's Dashboard</h1> 
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="StudentPage.php" style="margin-right: 15px;"><i class="fa-solid fa-house-user"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log-Out</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <br>
<!-- Navigation Bar Ends -->
 <!-- Bootstrap dynamic toggolable pills starts from here -->
 <br>
              <div class="mb-3">
                <div class="toggolable">
                  <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link active text-dark" href="#pending">Pending</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link text-dark" href="#accepted">Accepted</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link text-dark" href="#rejected">Rejected</a></li>
                  </ul><br>
                  <div class="tab-content center">
                    <div id="pending" class="tab-pane active">
                      <!-- Accepted Table will be added here -->
                      <table>

                      <tr>
                            <th> Complaint_No </th>
                            
                            <th> PC_ID </th>
                            <th> Description </th>
                            <th> Date </th>
                            <th> Action </th>
                            </tr>
                    <?php



                    ?>

                    <?php
                    include('DatabaseConnection.php');

                    session_start();
                      
                        $Your_ID = $_SESSION['roll'];
                        
                        
                        $fetchComplaintsSql = "SELECT * FROM placecomplaint WHERE Academic_Roll = '$Your_ID' and complaintStatus= 'pending'";

                        $fetchComplaintsSqlresult = mysqli_query($conn,$fetchComplaintsSql);

                      
                    ?>        
                              
                          
                    <?php    

                            while ($row = $fetchComplaintsSqlresult->fetch_assoc()) 
                            {

                              $Complaint_No=$row['Complaint_No'];
                             
                              $PC_ID=$row['PC_Id'];
                              $Description=$row['Description'];
                              $Date =$row['Date'];
                    ?>   
                              <tr>
                                  <td><?php echo $Complaint_No?> </td>
                                  
                                  <td> <?php echo $PC_ID?> </td>
                                  <td> <?php echo $Description?></td>
                                  <td> <?php echo $Date?> </td>

                                  <td>
                                  <a href="cancelComplaints.php?id=<?php echo $Complaint_No; ?>" class='trash-button'>Cancel</a>
                                  </td>
                                  </tr>    
                    <?php           
                            }
                        
                    ?> 

                    <?php  

                       
                    ?>
                    </table> 
                      
                    </div>
                    <div id="accepted" class="tab-pane">
                        <!-- Pending Table will be added here -->
                       
                        <table>

                      <tr>
                            <th> Complaint_No </th>
                            
                            <th> PC_ID </th>
                            <th> Description </th>
                            <th> Date </th>
                            
                            </tr>
                    <?php



                    ?>

                    <?php
                    include('DatabaseConnection.php');

                      
                        
                        
                        
                        $fetchSolvedComplaintsSql = "SELECT * FROM solvedcomplaints WHERE Academic_Roll = '$Your_ID' ";

                        $fetchSolvedComplaintsSqlresult = mysqli_query($conn,$fetchSolvedComplaintsSql);

                      
                    ?>        
                              
                          
                    <?php    

                            while ($row = $fetchSolvedComplaintsSqlresult->fetch_assoc()) 
                            {

                              $Complaint_No=$row['Complaint_no'];
                              
                              $PC_ID=$row['PC_Id'];
                              $Description=$row['Description'];
                              $Date =$row['Date'];
                    ?>   
                              <tr>
                                  <td><?php echo $Complaint_No?> </td>
                                  
                                  <td> <?php echo $PC_ID?> </td>
                                  <td> <?php echo $Description?></td>
                                  <td> <?php echo $Date?> </td>

                                 
                                  </tr>    
                    <?php           
                            }
                        
                    ?> 

                    <?php  

                       
                    ?>
                    </table>
                      
                      </div>
                    <div id="rejected" class="tab-pane fade">
                      <!-- Rejected Table will be added here -->
                      <table>

                      <tr>
                            <th> Complaint_No </th>
                           
                            <th> PC_ID </th>
                            <th> Description </th>
                            <th> Date </th>
                            
                            </tr>
                    <?php



                    ?>

                    <?php
                    
                    if(!isset($_SESSION['email']))
                    {
                      header('location:logInPage.html');
                    }
                    include('DatabaseConnection.php');

                        $fetchComplaintsSql = "SELECT * FROM placecomplaint WHERE Academic_Roll = '$Your_ID' and complaintStatus= 'rejected'";

                        $fetchComplaintsSqlresult = mysqli_query($conn,$fetchComplaintsSql);

                      
                    ?>        
                              
                          
                    <?php    

                            while ($row = $fetchComplaintsSqlresult->fetch_assoc()) 
                            {

                              $Complaint_No=$row['Complaint_No'];
                              
                              $PC_ID=$row['PC_Id'];
                              $Description=$row['Description'];
                              $Date =$row['Date'];
                    ?>   
                              <tr>
                                  <td><?php echo $Complaint_No?> </td>
                                  
                                  <td> <?php echo $PC_ID?> </td>
                                  <td> <?php echo $Description?></td>
                                  <td> <?php echo $Date?> </td>

                                  
                                  </tr>    
                    <?php           
                            }
                        
                    ?> 

                    <?php  

                       
                    ?>
                    </table>
                    </div>
                   
                  </div>
                </div>
              </div>
              <!-- Bootstrap dynamic toggolable pills ends here -->












  
  
    
</body>


</html>


