<?php
$name= $_POST["firstName"]." ".$_POST["lastName"];




if(isset($_POST["studentID"]))
{
    applyAsStudent($name);

}
if(isset($_POST["designation"]))
{
    applyAsTeacher($name);

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
}

?>