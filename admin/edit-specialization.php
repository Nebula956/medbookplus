<?php
include 'partials/header.php';
if(isset($_GET['id'])){
 $id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 //fetch category from database
 $query="SELECT * from specialization WHERE id='$id'";
 $result=mysqli_query($connection,$query);
 if(mysqli_num_rows($result)==1){
    $specialization=mysqli_fetch_assoc($result);
 }
}
else{
    header('location: ' . ROOT_URL . 'admin/manage-specialization.php');
    die();
}
?>
<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit specialization</h2>
        <form action="<?=ROOT_URL?>admin/edit-specialization-logic.php" method="POST">
        <input type="hidden" name="id" value=<?=$specialization['id']?> >
            <input type="text" name="title" value=<?=$specialization['title']?> placeholder="Title">
            <textarea rows="4" name="description" placeholder="Description"><?=$specialization['description']?></textarea>
             <button type="submit" name="submit" class="btn">Update specialization</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>