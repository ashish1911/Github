<?php
    
    if($_POST){
        include("db/db.php");
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $upassword = $_POST['password'];
        
        $insert_user = "insert into user_info(name,email,pass) values('$uname','$uemail','$upassword')";

        $run_user = mysqli_query($con,$insert_user);

        if($run_user){
            echo "<script>alert('Congratulations!! Account successfully created')</script>";
            echo "<script>window.open('Login.html','_self')</script>";
        }else{
            echo "<script>alert('Sorry!! Try Again')</script>";
            echo "<script>window.open('Registration.html','_self')</script>";
        }
    }

?>