<?php
include 'partials/header.php';
//fetch specialization from database
$query=" SELECT * from specialization ORDER BY title";
$specializations=mysqli_query($connection,$query);
?>
<section class="dashboard">
<?php if(isset($_SESSION['add-specialization-success'])):?>
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['add-specialization-success'];
                unset($_SESSION['add-specialization-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['add-specialization'])):?>
        <div class="alert_message error container">
            <p>
                <?=$_SESSION['add-specialization'];
                unset($_SESSION['add-specialization'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['edit-specialization-success'])): // shows if edit-specialization was successful ?> 
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['edit-specialization-success'];
                unset($_SESSION['edit-specialization-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['delete-specialization-success'])): // shows if delete-specialization was successful ?> 
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['delete-specialization-success'];
                unset($_SESSION['delete-specialization-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['edit-specialization'])): // shows if edit-specialization was not successful ?>
        <div class="alert_message error container">
            <p>
                <?=$_SESSION['edit-specialization'];
                unset($_SESSION['edit-specialization'])?>
            </p>
        </div>

        <?php endif?>
    <div class="conatiner dashboard_container">
        <button id="show-sidebar-btn"class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide-sidebar-btn"class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
        <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i>
                <h5>Add Post</h5>
                </a></li>
                <li><a href="index.php"><i class="uil uil-postcard"></i>
                    <h5>Manage Post</h5>
                    </a></li>
                    <?php if(isset($_SESSION['user_is_admin'])) : ?>
                    <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
                        <h5>Add User</h5>
                        </a></li>
                        <li><a href="manage-users.php"><i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                            </a></li>
                            <li><a href="add-category.php"><i class="uil uil-edit"></i>
                                <h5>Add Category</h5>
                                </a></li>
                                <li><a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                                    <h5>Manage Categories</h5>
                                    </a></li>
                                    <li><a href="add-specialization.php"><i class="uil uil-list-ul"></i>
                                    <h5>Add specialization</h5>
                                    </a></li>
                                    <li><a href="manage-specialization.php"class="active"><i class="uil uil-list-ul"></i>
                                    <h5>Manage specialization</h5>
                                    </a></li>
                                    <li><a href="manage-appointment.php"><i class="fa-solid fa-user-doctor"></i>
                                    <h5>Take Appointment</h5>
                                    
                                    </a></li>
                                    <?php endif ?>

            </ul>
        </aside>
        <main>
            <h2>Manage Specialization</h2>
            <?php if(mysqli_num_rows($specializations)>0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($specialization=mysqli_fetch_assoc($specializations)) : ?> 

                    <tr>
                        <td><?=$specialization['title']?></td>
                        <td><a href="<?=ROOT_URL?>admin/edit-specialization.php?id=<?=$specialization['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="<?=ROOT_URL?>admin/delete-specialization.php?id=<?=$specialization['id']?>"class="btn sm danger">Delete</a></td>
                    
                    </tr>
                <?php endwhile?>
                </tbody>
             
            </table>
            <?php else : ?>
           <div class="alert_message error"><?="No specialization found "?> </div>
           <?php endif?>
        </main>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
  