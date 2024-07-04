<?php
require_once "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    

    
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Animate CSS  -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!-- Font Awesome CSS  -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
 
  

  <!-- favicon  -->
  <link rel="icon" type="image/x-icon" href="images/logo1.png">
    <title>TechStudio</title>
    </head>

    

<body>



<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark pl-5 fixed-top pt-4">
            <a class="navbar-brand" href="index.php"><img src="images/Screenshot 2023-08-28 114609.png" width="100"
                    height="30" class="d-inline-block align-top" alt="">
            </a>
            <span class="tagline">Learn and Implement</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pl-5 ml-5 " id="navbarNavDropdown">
                <ul class="navbar-nav custom-nav ml-5 pl-5" style="font-size: 20px;">
                    <li class="nav-item  custom-nav-item">
                        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown custom-nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <?php
            $sql="Select *from course";
            $result=$mysqli->query($sql);
                    $course_id=19;   
                    echo     '<a class="dropdown-item text-success" href="coursedetails.php?course_id='.$course_id.'">Web Development</a>';
                    $course_id=17;   
                    echo     '<a class="dropdown-item text-success" href="coursedetails.php?course_id='.$course_id.'">App Development</a>';
                    $course_id=18;   
                    echo     '<a class="dropdown-item text-success" href="coursedetails.php?course_id='.$course_id.'">Python Programming</a>';
            ?>
                            <a class="dropdown-item text-success" href="courses.php">See More</a>
                        </div>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="paymentstatus.php">Payment Status</a>
                    </li>
                    <!-- <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="studentprofile.php">My Profile</a>
                    </li> -->
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <!-- <li class="nav-item custom-nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#stuloginCenter" href="#">Login</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#sturegistrationCenter" href="#">Signup</a>
                    </li> -->
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="Studentfeedback.php">Feedback</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="contactpage.php">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>

        </header>