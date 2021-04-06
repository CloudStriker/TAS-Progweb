<?php 
    session_start();
    include_once('common/connection.php');

    if(isset($_SESSION['users']) && $_SESSION['users']!=null){
        header("location:index.php");
    }

    if($_POST){
        $con = createConnection();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM users WHERE username= '".$username."' AND password = SHA1('".$password."')";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);  
            $_SESSION['users']['id'] = $row['id'];
            $_SESSION['users']['user'] = $row['username'];
            $_SESSION['users']['role'] = $row['role'];
            $_SESSION['users']['photo'] = $row['photo'];
            header("location:index.php");
        }else{
            header("location:login.php?err=0");
        }
    }
?>