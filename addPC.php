<?php



$PC_Id=$_POST['PC_Id'];
$PC_status= "Active";
$NoOfComplaint=0; 

addPc($PC_Id,$PC_status,$NoOfComplaint);

function addPc($PC_Id,$PC_status,$NoOfComplaint)
{
  include('DatabaseConnection.php');
  $sql= "INSERT into pc (`PC_Id`,`PC_status`,`NoOfComplaints`)
  values('$PC_Id','$PC_status','$NoOfComplaint')"; 
  $res=mysqli_query($conn, $sql);
  return $res;
}
if(addPc($PC_Id,$PC_status,$NoOfComplaint)){
       
    echo '<script>alert(" PC is added successfully!");
      location="CheckPCStatus.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to add InfoPC!");
    location="CheckPCStatus.php";
    </script>';
  }

?>