<?php
session_start();
require_once 'include/dbconnect.php'; 
    $name = $_POST['name'];
    $hire_date = $_POST['hire_date'];
    $woker_id = $_POST['worker_id'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    $id = $_SESSION['uid'];
    $approve = 0;

    $query = "INSERT INTO hire_worker (woker_id,name,contact,email,need_date,description,approve,hire) 
                VALUES ('$woker_id','$name','$contact','$email','$hire_date','$desc','$approve','$id')";

    $result = mysqli_query($conn,$query);
    if($result){
        $_SESSION['success'] = "Successfull";
        header('location:hireme.php');
    }

?>