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

        <div class="offcanvas offcanvas-end show text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
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
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-outline-green" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Add new JOb </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Try adding </h6>
                        <p class="card-text">New job opening can be added here.</p>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add new JOb
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
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="rmmodal" data-bs-target="#staticBackdrop">
                            Remove jobs
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-yellow my-4">

        <!-- <hr class="bg-yellow my-4"> -->

        <!-- job listings from this admin -->

        <div class="container mt-5">
            <h2>Job Listings</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Software Developer</h5>
                            <h6 class="card-subtitle mb-2 text-muted">ABC Tech Solutions</h6>
                            <p class="card-text">San Francisco, CA</p>
                            <p class="card-text">We are looking for a skilled software developer to join our team...</p>
                            <p class="card-text"><strong>Job Type:</strong> Full Time</p>
                            <p class="card-text"><strong>Deadline:</strong> August 31, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">UX Designer</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Design Innovations</h6>
                            <p class="card-text">New York, NY</p>
                            <p class="card-text">Join our creative team as a UX designer and help create...</p>
                            <p class="card-text"><strong>Job Type:</strong> Part Time</p>
                            <p class="card-text"><strong>Deadline:</strong> September 15, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Marketing Manager</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Global Marketing Group</h6>
                            <p class="card-text">London, UK</p>
                            <p class="card-text">Lead our marketing efforts and drive brand awareness...</p>
                            <p class="card-text"><strong>Job Type:</strong> Contract</p>
                            <p class="card-text"><strong>Deadline:</strong> October 10, 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal for adding job -->

        <div class="modal fade modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
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
                    </form>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Job</button>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

//job add button and php
    if(isset($_POST['submit'])){

        $jobTitle = $_POST["jobTitle"];
        $companyName = $_POST["companyName"];
        $location = $_POST["location"];
        $jobDescription = $_POST["jobDescription"];
        $jobType = $_POST["jobType"];
        $applicationDeadline = $_POST["applicationDeadline"];
//job add query
        $j_ad = "INSERT INTO 'jobs' ('job_title', 'company_name', 'location', 'job_description', 'job_type', 'application_deadline')
        VALUES ('$jobTitle', '$companyName', '$location', '$jobDescription', '$jobType', '$applicationDeadline')";

        $j_res=mysqli_query($conn,$j_ad);
        if($j_res){
            echo "<script> alert('successfully added new job')";
        }

    }
?>