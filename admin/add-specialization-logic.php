<?php
require 'config/database.php';
if(isset($_POST['submit'])){
    //get form data
    $title=filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description=filter_var($_POST['description'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if(!$title){
        $_SESSION['add-specialization']="Enter Title";
    }
    elseif(!$description){
        $_SESSION['add-specialization']="Enter Description";
    }
    //redirect to add specialization page with form data if any error 
    if(isset($_SESSION['add-specialization'])){
        $_SESSION['add-specialization-data']=$_POST;
      header('location: '.ROOT_URL . 'admin/add-specialization.php' );
      die();
    }
    else{
        //insert category in database 
        $query="INSERT INTO specialization (title, description) VALUES ('$title','$description')";
        $result=mysqli_query($connection,$query);
        if(mysqli_errno($connection)){
            $_SESSION['add-specialization']="Couldnt add specialization";
            header('location: '.ROOT_URL . 'admin/add-specialization.php' );
            die();
        }
        else{
            $_SESSION['add-specialization-success']="specialization $title added successfully";
            header('location: '.ROOT_URL . 'admin/manage-specialization.php' );
            die();
        }

    }
}
    