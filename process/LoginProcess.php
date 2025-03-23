<?php
include('../database/Connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


    if($email!=""){
        $query= "SELECT * FROM users where email='$email' and `password`='$password'";
        $result= mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            $row= mysqli_fetch_assoc($result);
            session_start();
            
            $_SESSION['id']= $row['id'];
            $_SESSION['email']= $row['email'];
            $_SESSION['password']=$row['password'];
            $msg= "succesfully login";

        }else{
            $errmsg="record not match";
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
    header('Location:../pages/Home.php?msg='.$msg);
    
}else{

header('Location:../pages/Login.php?err='.$errmsg);
} 
 ?>
 