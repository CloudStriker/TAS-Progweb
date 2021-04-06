<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){
        $sapaan = trim($_POST['sapaan']);
        $title = trim($_POST['title']);
        $skillsInfo = trim($_POST['skillsInfo']);
        $resumeInfo = trim($_POST['resumeInfo']);
        $galleriesInfo = trim($_POST['galleriesInfo']);
        $contactInfo = trim($_POST['contactInfo']);
        $copyright = trim($_POST['copyright']);
        $byy = trim($_POST['byy']);
        $msg = "";

       

        $validate = true;
        // $msgSapaan = "";
        // $msgTitle = "";
        // if($msgSapaan == ""){ 
        //     $msg .= "Greetings tidak boleh kosong";
        //     $validate = false;
        // }
        // if($msgTitle == ""){ 
        //     $msg .= "Greetings tidak boleh kosong";
        //     $validate = false;
        // }

        if($validate){
            $con = createConnection();
            $sql = "UPDATE website SET sapaan='".$sapaan."', title='".$title."', skillsInfo='".$skillsInfo."', resumeInfo='".$resumeInfo."', galleriesInfo='".$galleriesInfo."', contactInfo='".$contactInfo."', copyright='".$copyright."', byy='".$byy."'";
            echo $sql;
            if(mysqli_query($con, $sql)){
                header("location:formHomeTitle.php?msg=1");
            }else{
                header("location:formHomeTitle.php?msg=0");
            }
         }
        //  else{
        //     $_SESSION['msg'] = $msg;
        //     header("location:location:formHomeTitle.php?msg=0");
        // }
    }

?>