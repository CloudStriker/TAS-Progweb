<?php 
    session_start();
    include_once('common/connection.php');
    if(isset($_SESSION['users']) && $_SESSION['users']!=null){
            header("location:index.php");
        }
    $con = createConnection();
    if($_GET){
        $id = $_GET['id'];
        $sql = "DELETE FROM socialmedia WHERE id='".$id."'";
        $result = mysqli_query($con, $sql);
        if($result){
            header("location:listSocialMedia.php?msg=1");
        } else {
            header("location:listSocialMedia.php?msg=0");
        }  
    }
 

?>