<?php 
    session_start();
    include_once('common/connection.php');
    if(isset($_SESSION['users']) && $_SESSION['users']!=null){
            header("location:index.php");
        }
    $con = createConnection();
    if($_GET){
        $id = $_GET['id'];
        $sql = "DELETE FROM contact WHERE id='".$id."'";
        $result = mysqli_query($con, $sql);
        if($result){
            header("location:listContact.php?msg=1");
        } else {
            header("location:listContact.php?msg=0");
        }  
    }
 

?>