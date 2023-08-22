<?php 
    require "conn_db.php";
    $fetch_jobs = "SELECT * FROM `jobs`";
    $fetch_jobs_r = mysqli_query($conn,$fetch_jobs);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            body {
                background: hsla(213, 77%, 14%, 1);
                background: linear-gradient(90deg, hsla(213, 77%, 14%, 1) 0%, hsla(202, 27%, 45%, 1) 100%);
                background: -moz-linear-gradient(90deg, hsla(213, 77%, 14%, 1) 0%, hsla(202, 27%, 45%, 1) 100%);
                background: -webkit-linear-gradient(90deg, hsla(213, 77%, 14%, 1) 0%, hsla(202, 27%, 45%, 1) 100%);
                filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#08203E", endColorstr="#557C93", GradientType=1 );
            }
            .card-outline-green {
                border: 2px solid #28a745; /* Green color */
                border-radius: 0.25rem; /* Rounded corners */
            }
        </style>
		  <script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
		</script>
    </head>
    <body>
    <!-- navbar for options -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Admin Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">show details</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- side bar for additional -->

        <div class="offcanvas offcanvas-end  text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p>convo page ... </p>
            </div>
        </div>
        </br>
    <!-- card for adding new job -->
    <center>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-outline-green" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Add new job </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Try adding </h6>
                        <p class="card-text">New job opening can be added here.</p>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add new Job
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- card to remove jobs from portal  -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Remove a job </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Remove jobs </h6>
                        <p class="card-text">Try clicking on remove jobs button.</p>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#removemodal">
                            Remove jobs
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </center>
        <hr class="bg-yellow my-4">

        <!-- job listings from this admin -->
        <div class="container mt-5">
            <h2>Job Listings</h2>
            <div class="row">
             <?php while($jb_row = mysqli_fetch_array($fetch_jobs_r)) {?>
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $jb_row['job_title'];?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $jb_row['company_name'];?></h6>
                            <p class="card-text"><?php echo $jb_row['location'];?></p>
                            <p class="card-text"><?php echo $jb_row['job_description'];?></p>
                            <p class="card-text"><strong>Job Type: <?php echo $jb_row['job_type'];?></strong></p>
                            <p class="card-text"><strong>Deadline:</strong><?php echo $jb_row['application_deadline'];?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- modal for adding job -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Job Details Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container mt-5">
                    <h2>Add New Job</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="companyName" required>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobDescription" class="form-label">Job Description</label>
                            <textarea class="form-control" id="jobDescription" name="jobDescription" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jobType" class="form-label">Job Type</label>
                            <select class="form-select" id="jobType" name="jobType" required>
                                <option value="fullTime">Full Time</option>
                                <option value="partTime">Part Time</option>
                                <option value="contract">Contract</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="applicationDeadline" class="form-label">Application Deadline</label>
                            <input type="date" class="form-control" id="applicationDeadline" name="applicationDeadline" required>
                        </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <input type="submit" name="add_jb_btn" value="add job"> -->
                    <button type="submit" name="add_jb_btn" class="btn btn-primary">Add Job</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
            
        <!-- model for removing jobs  -->
        <div class="modal fade" id="removemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Remove jobs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php 
                    require "conn_db.php";
                    $fetch_rm = "SELECT * FROM `jobs`";
                    $fetch_rm_r = mysqli_query($conn,$fetch_rm);
                ?>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>Location</th>
                                <th>Job Description</th>
                                <th>Job Type</th>
                                <th>Deadline</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($jb_rm = mysqli_fetch_array($fetch_rm_r)) { ?>
                                <tr>
                                    <td><?php echo $jb_rm['job_title'];?></td>
                                    <td><?php echo $jb_rm['company_name']; ?></td>
                                    <td><?php echo $jb_rm['location']; ?></td>
                                    <td><?php echo $jb_rm['job_description']; ?></td>
                                    <td><?php echo $jb_rm['job_type']; ?></td>
                                    <td><?php echo $jb_rm['application_deadline']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-danger delete-btn" data-job-id="<?php echo $jb_row['id']; ?>">Delete</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

    </body>
</html>



<?php
    require "conn_db.php";
//job add button and php
    if(isset($_POST['add_jb_btn'])){
        
        $jobTitle = $_POST["jobTitle"];
        $companyName = $_POST["companyName"];
        $location = $_POST["location"];
        $jobDescription = $_POST["jobDescription"];
        $jobType = $_POST["jobType"];
        $applicationDeadline = $_POST["applicationDeadline"];
        //job add query

        $j_ad = "INSERT INTO `jobs`(`job_title`, `company_name`, `location`, `job_description`, `job_type`, `application_deadline`) 
        VALUES ('$jobTitle','$companyName','$location','$jobDescription','$jobType', '$applicationDeadline')";
        
        $j_res=mysqli_query($conn,$j_ad);
        if($j_res){echo "<script> alert('successfully added new job')";}

    }

    if(isset($_POST['']))
?>
