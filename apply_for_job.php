<?php
session_start();
$master=$_SESSION["sid"];
require "conn_db.php"; // Include your database connection file

if (isset($_POST['job_id'])) {
    $job_id = $_POST['job_id'];
    
    // You might want to check if the applicant already applied for this job before proceeding
    // This could involve checking the applicant's user ID and the job ID in a separate table
    
    // Assuming you have a table named "job_applications" with columns "applicant_id" and "job_id"
    $applicant_id = $master; // Replace with the actual applicant's ID
    $insert_query = "INSERT INTO job_applications (applicant_id, job_id) VALUES ($applicant_id, $job_id)";
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Job application successful";
    } else {
        echo "Error applying for job: " . mysqli_error($conn);
    }
} else {
    echo "Job ID not provided";
}
?>
