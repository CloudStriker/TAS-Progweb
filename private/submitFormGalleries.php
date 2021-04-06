<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){
        $label = isset($_POST['label']) ? $_POST['label'] : '';
        $labelInfo = trim($_POST['labelInfo']);
        $info = trim($_POST['info']);
        $link = trim($_POST['link']);
    
        $validate = true;
        $msg = "";
        
        if($label == ''){
           $validate = false;
           $msg .= "label tidak boleh kosong! <br>" ;
       }
       if($labelInfo==''){
           $validate = false;
           $msg .= "Label Info tidak boleh kosong! <br>" ;
       }
       if($info ==''){
           $validate = false;
           $msg .= "info tidak boleh kosong! <br>" ;
       }

       if($link ==''){
           $validate = false;
           $msg .= "link tidak boleh kosong! <br>" ;
       }



       if(strtolower(pathinfo($_FILES['uploadImages']['name'], PATHINFO_EXTENSION)) != "jpg"){
           $msg .= "File Pic harus dalam format JPG.<br />";
           $validate = false;
       }


        if($validate){
            $con = createConnection();
            $sql = "INSERT INTO galleries (label, labelInfo, info, link, user) VALUES ('$label', '$labelInfo', '$info','$link', '".$_SESSION['users']['user']."' )";
            echo $sql;
            $result = mysqli_query($con, $sql);
            if($result){
                if(move_uploaded_file($_FILES['uploadImages']['tmp_name'],
                "uploads/".$_FILES['uploadImages']['name'])){
                    $sql = "UPDATE galleries set src = 'uploads/
                    ".$_FILES['uploadImages']['name']."' WHERE user = '".$_SESSION['users']['user']."'";
                    mysqli_query($con, $sql);
                    echo $sql;
                    header("location:listGalleries.php?msg=1");
                }else{
                    $msg .= "File photo gagal diupload.<br />";
                    header("location:formGalleries.php?msg=0");
                 }
             }else{
                 header("location:formGalleries.php?msg=0");
             }

                header("location:listGalleries.php?msg=0");
            }else{
                $_SESSION['msg'] = $msg;
               header("location:formGalleries.php?msg=0");
            }
         }

?>