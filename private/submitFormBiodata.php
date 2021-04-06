<?php 
    session_start();
    include_once('common/connection.php');

    if(!isset($_SESSION['users']) || $_SESSION['users']==null){
        header("location:login.php");
    }


    if($_POST){
        $about = trim($_POST['about']);
        $profile = trim($_POST['profile']);
        $fullname = trim($_POST['fullname']);
        $tahun = $_POST['tahun'];
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];
        $job = trim($_POST['job']);
        $website = trim($_POST['website']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);

       

         $validate = true;
         $msg = "";
        
         if($about == ''){
            $validate = false;
            $msg .= "about tidak boleh kosong! <br>" ;
        }
        if($profile==''){
            $validate = false;
            $msg .= "profile tidak boleh kosong! <br>" ;
        }
        if($tahun ==''){
            $validate = false;
            $msg .= "tahun tidak boleh kosong! <br>" ;
        }

        if($bulan ==''){
            $validate = false;
            $msg .= "bulan tidak boleh kosong! <br>" ;
        }

        if($tanggal ==''){
            $validate = false;
            $msg .= "tanggal tidak boleh kosong! <br>" ;
        }

        if($job==''){
            $validate = false;
            $msg .= "job tidak boleh kosong! <br>" ;
        }
        if($website ==''){
            $validate = false;
            $msg .= "website  tidak boleh kosong! <br>" ;
        }
        if($email==''){
            $validate = false;
            $msg .= "email tidak boleh kosong! <br>" ;
        }
        if($phone==''){
            $validate = false;
            $msg .= "phone tidak boleh kosong! <br>" ;
        }
        if($address==''){
            $validate = false;
            $msg .= "address tidak boleh kosong! <br>" ;
        }

        if(strtolower(pathinfo($_FILES['uploadCV']['name'], PATHINFO_EXTENSION)) != "pdf"){
            $msg .= "File CV harus dalam format PDF.<br />";
            $validate = false;
        }

        if(strtolower(pathinfo($_FILES['uploadImages']['name'], PATHINFO_EXTENSION)) != "jpg"){
            $msg .= "File Pic harus dalam format JPG.<br />";
            $validate = false;
        }


        if($validate){
            $con = createConnection();
            $sql = "UPDATE biodata SET about='".$about."', profile='".$profile."', fullname='".$fullname."', tahun='".$tahun."', bulan='".$bulan."', tanggal='".$tanggal."', job='".$job."', website='".$website."', email='".$email."', phone='".$phone."', address='".$address."' WHERE user = '".$_SESSION['users']['user']."'";
            echo $sql;
            $result = mysqli_query($con, $sql);
            if($result){
                if(move_uploaded_file($_FILES['uploadCV']['tmp_name'],
                "uploads/".$_FILES['uploadCV']['name'])){
                    $filename = str_replace(" ", "_", $_FILES['userfile']['name']);
                    $sql = "UPDATE biodata set CV = 'uploads/
                    ".$filename."' WHERE user = '".$_SESSION['users']['user']."'";
                    mysqli_query($con, $sql);
                    echo $sql;
                    header("location:formBiodata.php?msg=1");
                }else{
                    $msg .= "File CV gagal diupload.<br />";
                    header("location:formBiodata.php?msg=0");
                 }
                 if(move_uploaded_file($_FILES['uploadImages']['tmp_name'],
                "images/users/".$_FILES['uploadImages']['name'])){
                    $sql = "UPDATE biodata set photo = 'images/users/
                    ".$_FILES['uploadImages']['name']."' WHERE user = '".$_SESSION['users']['user']."'";
                    mysqli_query($con, $sql);
                    echo $sql;
                    header("location:formBiodata.php?msg=1");
                }else{
                    $msg .= "File photo gagal diupload.<br />";
                    header("location:formBiodata.php?msg=0");
                 }
             }else{
                 header("location:formBiodata.php?msg=0");
             }
          }else{
              $_SESSION['msg'] = $msg;
              header("location:formBiodata.php?msg=0");
         }
    }
?>