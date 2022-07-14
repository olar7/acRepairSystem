<?php 
session_start();
    require_once 'dbconnect.php';

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $role = $_POST['role'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM user where email = '$email'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) == 0){
            $query = "INSERT INTO user (name,email,password,role) 
                    VALUES ('$name','$email','$password','$role') ";
            $result = mysqli_query($conn,$query);
            if($role == 'tech'){
                $_SESSION['email'] = $email; 
                header('location:../user_details.php');
            }else{
                header('location:../login.php');
            }

        }
        else{
            $_SESSION['email_error'] = "Email already exist"; 
            header('location:../register.php');
        }
    }
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM user where email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $data = mysqli_fetch_assoc($result);
            if($data['role'] == 'tech'){
                $_SESSION['tech_id'] = $data['uid'];
                $_SESSION['tech_name'] = $data['name'];
                $_SESSION['tech_email'] = $data['email'];
                header('location:../tech/index.php');
            }else{
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                header('location:../index.php');
            }
                
        }
        else{
            $_SESSION['login_error'] = "Username or password invalid";
            header('location:../login.php');
        }
    }

    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $expereince = $_POST['expereince'];
        $hourly_rate = $_POST['hour_rate'];
        $desc = $_POST['desc'];
        $image = $_FILES['image']['name'];
        $target = "../assets/front/images/workers/".basename($image);
        
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        $id = $data['uid'];

        $query2 = "INSERT INTO user_details VALUES ('$id','$expereince','$hourly_rate','$desc','$image')";
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            mysqli_query($conn,$query2);
            $_SESSION['success'] = "Please login to continue";
            header('location:../login.php');
        }
    }
    
?>