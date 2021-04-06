<?php 
    session_start();
    include_once('common/connection.php');
    if(isset($_SESSION['users']) && $_SESSION['users']!=null){
            header("location:index.php");
        }
    $con = createConnection();
    if($_GET){
        $id = $_GET['id'];
        $sql = "DELETE FROM experiences WHERE id='".$id."'";
        $result = mysqli_query($con, $sql);
        if($result){
            header("location:listExperiences.php?msg=1");
        } else {
            header("location:listExperiences.php?msg=0");
        }  
    }
 

?>