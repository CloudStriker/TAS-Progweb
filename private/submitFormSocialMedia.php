<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){

        $icon = $_POST['icon'];
        $link = $_POST['link'];

    
        $validate = true;
        $msg = "";
        
         if($link == ''){
            $validate = false;
            $msg .= "about tidak boleh kosong! <br>" ;
        }
       
        if($validate){
            $con = createConnection();
            $sql = "INSERT INTO socialmedia (icon, link, user) VALUES ('$icon', '$link', '".$_SESSION['users']['user']."' )";
            echo $sql;
            if(mysqli_query($con, $sql)){
               header("location:listSocialMedia.php?msg=1");
            }else{
              header("location:listSocialMedia.php?msg=0");
            }
         }else{
            $_SESSION['msg'] = $msg;
            header("location:formSocialMedia.php?msg=0");
       }
    }

?>