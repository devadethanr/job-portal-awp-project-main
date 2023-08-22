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
            body{
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(58,58,102,1) 0%, rgba(155,212,223,1) 100%);
            }
        </style>
    </head>
    <body>   
        <!-- navabar applicant  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Applicant/Home</a>
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

        <!-- available applications -->
        <form method="POST">
        <div class="container mt-5">
            <h2>Jobs available Right now !</h2>
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
                            <input type="hidden" name="jid" value="<?php echo $jb_row['jid']; ?>">
                            <button type ="submit" name="ap_btn" class="btn btn-primary apply-btn" >Apply for Job</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        </form>
    </body>
</html>
<?php 
    session_start();
    $master=$_SESSION["sid"];

    if(isset($_POST['ap_btn'])){
        echo "<script>alert('hey');</script>";
        $jid1=$_POST['jid'];
        $insert_query = "INSERT INTO `job_applications`(`applicant_id`, `jid`) VALUES ('$master','$jid1')";
        if (mysqli_query($conn, $insert_query)) {
            echo "Job application successful";
        } else {
            echo "Error applying for job: " . mysqli_error($conn);
        }
    }
?>
