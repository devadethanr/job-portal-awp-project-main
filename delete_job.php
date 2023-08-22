<?php
require "conn_db.php"; // Include your database connection file

if (isset($_POST['job_id'])) {
    $job_id = $_POST['job_id'];

    // Prepare and execute the delete query
    $delete_query = "DELETE FROM `jobs` WHERE `jid` = $job_id";
    if (mysqli_query($conn, $delete_query)) {
        echo "Job deleted successfully";
    } else {
        echo "Error deleting job: " . mysqli_error($conn);
    }
} else {
    echo "Job ID not provided";
}
?>