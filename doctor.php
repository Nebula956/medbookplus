<?php
include 'partials/header.php';
//fetch all doctor from user table
$query="SELECT * FROM users WHERE is_admin=1  ORDER by firstname  DESC  ";
$doctors=mysqli_query($connection,$query);
?>
    <section class="search_bar">
        <form class="container search_bar-container"action="<?=ROOT_URL?>search2.php" method="GET">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="search" placeholder="Search">
            </div>
            <button type="submit" name="submit" class="btn">Go</button>
        </form>
    </section>
    <section class="post<?=$featured? '': 'section extra_margin' ?>">
    <div class=" container post_container">
    <?php while($doctor=mysqli_fetch_assoc($doctors)): ?>
      <article class="post">
        <div class="post_thumbnail">
          <img src="./images/<?=$doctor['thumbnail'] ?>">
         </div>
         <div class="post_info">
         <?php
         //fetch Specialization from specialization table using specialization table
          $specialization_id=$doctor['specialization_id'];
          $specialization_query="SELECT * FROM specialization WHERE id=$specialization_id";
          $specialization_result=mysqli_query($connection,$specialization_query);
          $specialization=mysqli_fetch_assoc($specialization_result);
         ?>
         <a href="<?=ROOT_URL?>specialization-posts.php?id=<?=$specialization['id']?>" class="category_button"><?=$specialization['title']?></a>          
          </div>
          </div>
      </article>
      <?php endwhile?>
      </div>
   </section>
<section class="category_buttons">
<section class="category_buttons">
<div class="container category_buttons-container">
  <?php
  $all_specialization_query="SELECT * from specialization";
  $all_specialization=mysqli_query($connection,$all_categories_query);
  ?>
  <?php while($specialization=mysqli_fetch_assoc($all_specialization)):?>
  <a href="<?=ROOT_URL?>specialization-posts.php?id=<?=$specialization['id']?>" class="category_button"><?=$specialization['title']?></a>
  <?php endwhile?>
</div>
</section>
<?php
include 'partials/footer.php';
?>