<?php
include 'partials/header.php';
$title=$_SESSION['add-specialization-data']['title']??null;
$description=$_SESSION['add-specialization-data']['description']??null;
unset($_SESSION['add-specialization-data']);
?>
<section class="form_section">
    <div class="container form_section-container">
        <h2>Add specialization</h2>
        <?php if(isset($_SESSION['add-specialization'])) : ?>
        <div class="alert_message error">
            <p>
                <?=$_SESSION['add-specialization'];
                unset($_SESSION['add-specialization']);
                ?>
            </p>
        </div>
        <?php endif?>
        <form action="<?=ROOT_URL ?>admin/add-specialization-logic.php" method="POST">
            <input type="text" value="<?=$title?>" name="title" placeholder="Title">
            <textarea rows="4" value="<?=$description?>" name="description" placeholder="Description"></textarea>
             <button type="submit" name="submit" class="btn">Add specialization</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>