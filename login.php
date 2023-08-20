<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
        </style>
    </head>
        <body>
        <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in to Job portal</p>
                <form method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example13" name="mail" class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example13">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" name="pass" class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        </div>
                        <a href="#!">Forgot password?</a>
                    </div>

                    <!-- Submit button -->
                    <button name="l_btn" type="submit"  class="btn btn-primary btn-lg btn-block"> sign in </button>
                </form>
            </div>
            </div>
        </div>
        </section>
    </body>
</html>
<?php
    if(isset($_POST['l_btn'])){
        require "conn_db.php";
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $l_qry="SELECT * FROM `register` WHERE `mail`= '$mail' AND `pass` = '$pass'";
        $l_rs=mysqli_query($conn,$l_qry);
        while($row=mysqli_fetch_array($l_rs)){
            session_start();
            if($row['role']=='ADMIN-JOB REGISTER'){
                $_SESSION["sid"]=$row['mail'];
                header("location:admin.php");
            }
            elseif($row['role']=='APPLICANT'){
                $_SESSION["sid"]=$row['mail'];
                header("location:applicant.php");
            }
            else{
                echo "<script> alert('account not found or suspended') </script>";
            }
        }
    }
?>