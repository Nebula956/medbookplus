<?php
require 'config/database.php';
if(isset($_GET['id']))
{
    $id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
//FOR LATER
//update specialization_id of doctors that belong to this  id of uncategorized specialization
$update_query="UPDATE users SET specialization_id=1 WHERE specialization=$id";
$update_result=mysqli_query($connection,$update_query);
if(!mysqli_errno($connection)){

//delete category
$query="DELETE FROM specialization WHERE id=$id LIMIT 1";
$result=mysqli_query($connection,$query);
$_SESSION['delete-specialization-success']="specialization  deleted successfully";
}
}
header('location:' .ROOT_URL . 'admin/manage-specialization.php' );
die();