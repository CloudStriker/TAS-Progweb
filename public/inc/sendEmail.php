<?php 
    session_start();
    include_once('../common/connection.php');

    if($_POST){

        $name = trim(stripslashes($_POST['contactName']));
        $email = trim(stripslashes($_POST['contactEmail']));
        $subject = trim(stripslashes($_POST['contactSubject']));
        $contact_message = trim(stripslashes($_POST['contactMessage']));
            $con = createConnection();
            $sql = "INSERT INTO contact (contactName, contactEmail, contactSubject, contactMessage) VALUES ('$name', '$email', '$subject', '$contact_message' )";
            //echo $sql;
            if(mysqli_query($con, $sql)){
                echo "OK";
            }else{
                echo "Something went wrong. Please try again.";
            }
         } 
?>