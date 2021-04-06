<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){
        $label = isset($_POST['label']) ? $_POST['label'] : '';
        $start = trim($_POST['startYear']);
        $end = trim($_POST['endYear']);
        $title = trim($_POST['title']);
        $info = trim($_POST['info']);

       

        $validate = true;
        $msg ="";

        if($label == ''){
            $validate = false;
            $msg .= "label tidak boleh kosong! <br>" ;
        }
        if($start==''){
            $validate = false;
            $msg .= "start year tidak boleh kosong! <br>" ;
        }
        if($end ==''){
            $validate = false;
            $msg .= "end year tidak boleh kosong! <br>" ;
        }

        if($title ==''){
            $validate = false;
            $msg .= "title tidak boleh kosong! <br>" ;
        }

        if($info ==''){
            $validate = false;
            $msg .= "info tidak boleh kosong! <br>" ;
        }


        if($validate){
            $con = createConnection();
            $sql = "INSERT INTO experiences (label, start, end, title, info, user) VALUES ('$label', '$start', '$end', '$title', '$info', '".$_SESSION['users']['user']."' )";
            echo $sql;
            if(mysqli_query($con, $sql)){
                header("location:listExperiences.php?msg=1");
            }else{
                header("location:formExperiences.php?msg=0");
            }
         }else{
            $_SESSION['msg'] = $msg;
            header("location:formExperiences.php?msg=0");
       }
    }

?>