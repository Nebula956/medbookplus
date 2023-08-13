php
Copy code
<?php
include 'partials/header.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Assuming you have a $connection variable established for database connection
    $appointment_query = "SELECT * FROM appointment WHERE id='$id'";
    $appointment_result = mysqli_query($connection, $appointment_query);

    if (mysqli_num_rows($appointment_result) == 1) {
        $appointment = mysqli_fetch_assoc($appointment_result);
    } else {
        header('location: ' . ROOT_URL . 'admin/manage-appointment.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-appointment.php');
    die();
}
?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Cancel Appointment</h2>
        <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
            <input type="email" name="email" value="<?= $appointment['email'] ?>" placeholder="Email">
            <textarea rows="10" name="MessageSent" placeholder="Prescription&Medicines"></textarea>
            <button type="submit" name="submit" class="btn">Send Report</button>
        </form>
    </div>
</section>

<?php
include 'partials/footer.php';
?>