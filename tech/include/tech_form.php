<?php
session_start();
    require_once '../../include/dbconnect.php';


    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $approve = $_POST['approve'];

        $query = "UPDATE hire_worker set approve = $approve WHERE hire_id = $id";
        $result = mysqli_query($conn,$query);
        if($result){
            $_SESSION['success'] = "Successfull";
            header('location:../work.php');
        }
    }

?>