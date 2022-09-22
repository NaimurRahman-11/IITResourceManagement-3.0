<?php
$name= $_POST["firstName"]." ".$_POST["lastName"];




if(isset($_POST["studentID"]))
{
    $res=applyAsStudent($name);

}
if(isset($_POST["designation"]))
{
    $res=applyAsTeacher($name);

}
if($res)
{
    echo "<script> alert('Registration is submitted!');
    location='logInPage.html';
    </script> ";
   
}
else
{
   
    echo "<script> alert('Can not receive duplicate information');
    location='logInPage.html';
    </script> ";
}

function applyAsStudent($name)
{
    include('DatabaseConnection.php');
    $studentID=$_POST["studentID"];
    $exampleInputEmail1=$_POST["exampleInputEmail1"];
    $Password=$_POST["Password"];
    
    $sql="INSERT into usertable(`Name`,`Academic_Roll`,`Email`,`userPassword`,`userStatus`)
    values('$name','$studentID','$exampleInputEmail1','$Password','Processing')";
    $result= mysqli_query($conn,$sql);
    return $result;
    
}

function applyAsTeacher($name)
{
    include('DatabaseConnection.php');
    $designation= $_POST["designation"];
    $exampleInputEmail1=$_POST["exampleInputEmail1"];
    $Password=$_POST["Password"];
    
    $sql="INSERT into usertable(`Name`,`Designation`,`Email`,`userPassword`,`userStatus`)
    values('$name','$designation','$exampleInputEmail1','$Password','Processing')";
    $result= mysqli_query($conn,$sql);
    return $result;
}

?>