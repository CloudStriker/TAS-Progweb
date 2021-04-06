<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }

    if($_POST){
        $id = (isset($_POST['id']) ? $_POST['id'] : '');
        // $id = $_GET['id'];
        $con = createConnection();
        $sql = "DELETE * FROM skills WHERE id = '".$id."' AND user = '".$_SESSION['users']['user']."' ";
        echo $sql;
        if(mysqli_query($con, $sql)){
           // header("location:listSkills.php");
        }else{
            //header("location:listSkills.php");
        }
    }

           


?>