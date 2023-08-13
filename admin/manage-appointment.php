<?php
include 'partials/header.php';
//fetch appoinments from database
$doctorid = $_SESSION['user-id'];
$query = "SELECT * FROM appointment WHERE doctorname = (
    SELECT firstname FROM users WHERE id = $doctorid)";
    
$appointments=mysqli_query($connection,$query);

?>
<section class="dashboard">
<?php if(isset($_SESSION['approveappointment-success'])):?>
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['approveappointment-success'];
                unset($_SESSION['approveappointment-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['approveappointment'])):?>
        <div class="alert_message error container">
            <p>
                <?=$_SESSION['approveappointment'];
                unset($_SESSION['approveappointment'])?>
            </p>
        </div>
      
        <?php elseif(isset($_SESSION['cancelappointment-success'])): // shows if cancel-appointment was successful ?> 
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['cancelappointment-success'];
                unset($_SESSION['cancelappointment-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['cancelappointment'])): // shows if cancel-appointment was not successful ?>
        <div class="alert_message error container">
            <p>
                <?=$_SESSION['cancelappointment'];
                unset($_SESSION['cancelappointment'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['report-success'])): // shows if report send  was successful ?> 
        <div class="alert_message success container">
            <p>
                <?=$_SESSION['report-success'];
                unset($_SESSION['report-success'])?>
            </p>
        </div>
        <?php elseif(isset($_SESSION['report'])): // shows if report send  was not successful ?>
        <div class="alert_message error container">
            <p>
                <?=$_SESSION['report'];
                unset($_SESSION['report'])?>
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
                                <li><a href="manage-categories.php" ><i class="uil uil-list-ul"></i>
                                    <h5>Manage Categories</h5>
                                    </a></li>
                                    <li><a href="add-specilization.php"><i class="uil uil-list-ul"></i>
                                       <h5>Add Specilization</h5>
                                    </a></li>
                                    <li><a href="manage-specilization.php"><i class="uil uil-list-ul"></i>
                                    <h5>Manage Specilization</h5>
                                    </a></li>
                                    <li><a href="manage-appointment.php"class="active"><i class="fa-solid fa-user-doctor"></i>
                                    <h5>Take Appointment</h5>
                                    
                                    </a></li>
                                    <?php endif ?>

            </ul>
        </aside>
        <main>
            <h2>Manage Appointment</h2>
            <?php if(mysqli_num_rows($appointments)>0): ?>
            <table>
                <thead>
                    <tr>
                        <th> Patient Name</th>
                        <th>Mobile Number</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Approve</th>
                        <th>Cancel</th>
                        <th>Report</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($appointment=mysqli_fetch_assoc($appointments)) : ?> 

                    <tr>
                        <td><?=$appointment['Patient_Name']?></td>
                        <td><?=$appointment['MobileNo']?></td>
                        <td><?=$appointment['username']?></td>
                        <td><?=$appointment['email'] ?></td>
                        <td><?=$appointment['MessageApt']?></td>
                        <td><?=$appointment['AppointmentDate']?></td>
                        <td><?=$appointment['AppointmentTime']?></td>
                        <td><a href="<?=ROOT_URL?>admin/approve-appointment.php?id=<?=$appointment['id']?>" class="btn sm">Approve</a></td>
                        <td><a href="<?=ROOT_URL?>admin/cancel-appointment.php?id=<?=$appointment['id']?>"class="btn sm danger">Cancel</a></td>
                        <td><a href="<?=ROOT_URL?>admin/report.php?id=<?=$appointment['id']?>"class="btn sm ">Report</a></td>
 
                    </tr>
                <?php endwhile?>
                </tbody>
             
            </table>
            <?php else : ?>
           <div class="alert_message error"><?="No Appointments found "?> </div>
           <?php endif?>
        </main>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
  