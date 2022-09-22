<?php
include('DatabaseConnection.php');

$email=$_POST['email'];
$password=$_POST['password'];

$sql= "SELECT * from userTable where userStatus='approved'";

$res= mysqli_query($conn,$sql);

$flag= false;
while($row=mysqli_fetch_assoc($res))
{
    if((strcasecmp($email,$row['Email']) == 0) && ($password == $row['userPassword']))
    {
        session_start();
        $_SESSION['email']= $email;
        $_SESSION['password'] == $password;
        $flag= true;
        if($row['Designation'] == Null)
        {
            $_SESSION['roll']= $row['Academic_Roll'];

            header('location:StudentPage.html');
        }


       
        elseif($row['Designation'] == 'Director')
        {
            header('location:DirectorPage.html');

        }
        elseif($row['Designation'] == 'Office Assistant')
        {
            header('location:OfficeAssistantPage.html');

        }
        elseif($row['Designation'] == 'Lab Assistant')
        {
            header('location:LabAssistantPage.html');

        }
        else
        {
            $_SESSION['name']= $row['Name'];
            header('location:TeacherPage.html');
        }


    }

}
if(!$flag)
{
    header('location:logInPage.html');
        
}




?>