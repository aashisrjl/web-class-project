<?php
include('../database/Connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['dob']) && isset($_POST['gender']))
{
    $msg="";
    $errmsg="";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender= $_POST['gender'];



    if($email!=""){
        if($username != ""){
                    $query= "INSERT INTO users (username,email,`password`,gender,dob) VALUES('$username','$email','$password','$gender','$dob')";

                        if(mysqli_query($conn,$query))
                        {
                            $msg="Login Success";
                           
                        }
                        else{
                            $errmsg= "Error: ". mysqli_error($conn);
                        }
           
        }else{
            $errmsg= "name can't be empty";
        }

    }else{
        $errmsg="email cannot be empty!";
    }
}else{
    $errmsg ="All fields are required";
}
}else{
    $errmsg= "request method does not support";
}
if($msg !="")
{
    header('Location:../pages/Login.php?msg='.$msg);
    
}else{

header('Location:../pages/Register.php?err='.$errmsg);
} 
 