<?php
session_start();
    require_once '../../include/dbconnect.php';


    if(isset($_POST['add_bread'])){
        $bread_name = $_POST['bread_name'];
        $desc = $_POST['desc'];
        $price = $_POST['bread_price'];
        $image = $_FILES['image']['name'];
        $target = "../../assets/front/img/breads/".basename($image);

        $query = "INSERT INTO bread(bread_name,bread_description,bread_price,image) Values ('$bread_name','$desc','$price','$image')";
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$result = mysqli_query($conn,$query);
            $_SESSION['success'] = "bread has been added";
            header('location:../bread.php');
        }
    }

?>