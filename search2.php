<?php
require 'partials/header.php';
if(isset($_GET['search'])&&isset($_GET['submit']))
{
    $search=filter_var($_GET['search'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query="SELECT * FROM  specialization WHERE title LIKE '%$search%' ORDER BY  date_time DESC";
    $doctors=mysqli_query($connection,$query);
}
else{
    header('location:' .ROOT_URL . 'blog.php');
    die();
}
?>
<?php if (mysqli_num_rows($doctors)>0) : ?>
<section class="posts section_extra-margin">
<div class=" container post_container">
<?php while($doctor=mysqli_fetch_assoc($doctors)): ?>
  <article class="post">
    <div class="post_thumbnail">
      <img src="./images/<?=$post['thumbnail'] ?>">
     </div>
     <div class="post_info">
     <?php
         //fetch Specialization from specialization table using specialization table
          $specialization_id=$doctor['specialization_id'];
          $specialization_query="SELECT * FROM specialization WHERE id=$specialization_id";
          $specialization_result=mysqli_query($connection,$category_query);
          $specialization=mysqli_fetch_assoc($specialization_result);
         ?>
         <a href="<?=ROOT_URL?>specialization-posts.php?id=<?=$specialization['id']?>" class="category_button"><?=$specialization['title']?></a>          
          </div>
          </div>
      </article>
      <?php endwhile?>
  </div>
</section>
<?php else :?>
    <div class="alert_message error lg section_extra-margin">
    <p>No Doctors found  for this search </p>
    </div>    
    <?php endif?>
<?php
include 'partials/footer.php';
?>