<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){
        $label = trim($_POST['label']);
        $percentage = trim($_POST['percentage']);

    
        $validate = true;
        $msg = "";
        
        if($label == ''){
           $validate = false;
           $msg .= "label tidak boleh kosong! <br>" ;
       }
       if($percentage==''){
           $validate = false;
           $msg .= "percentage tidak boleh kosong! <br>" ;
       }

        if($validate){
            $con = createConnection();
            $sql = "INSERT INTO skills (label, percentage, user) VALUES ('$label', '$percentage', '".$_SESSION['users']['user']."' )";
            echo $sql;
            if(mysqli_query($con, $sql)){
               header("location:listSkills.php?msg=1");
            }else{
               header("location:formSkills.php?msg=0");
            }
         }else{
            $_SESSION['msg'] = $msg;
            header("location:formSkills.php?msg=0");
       }
    }

?>