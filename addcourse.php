<?php

require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');

$returning='';

if(isset($_POST['course_submitbtn']))
{
    $name = $_POST['course_name'];
    $author_name = $_POST['course_author_name'];
    $desc = $_POST['course_desc'];
    $duration = $_POST['course_duration'];
    $original_price = $_POST['course_original_price'];
    $price = $_POST['course_price'];

    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_name = $_FILES['fileToUpload']['name'];

    $target_directory = "images/course_images/";

    $target_path = $target_directory . $file_name;

    if (move_uploaded_file($file_tmp, $target_path)) {
        $stmt = $mysqli->prepare("INSERT INTO course (course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("sssssss", $name, $desc, $author_name, $file_name, $duration, $price, $original_price);

            if ($stmt->execute()) {
                $returning = "Add Course Successfully.";
            } else {
                $returning = "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $returning = "Error: " . $mysqli->error;
        }
    } else {
        $returning = "Error uploading file.";
    }
}

?>

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name"  required
            >
        </div>
        <div class="form-group">
            <label for="course_author_name">Course Author</label>
            <input type="text" class="form-control" id="course_author_name" name="course_author_name"  required
            >
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2 required
            ></textarea>
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration"  required
            >
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" required
            >
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" required
            >
        </div>
        <div class="form-group">
            <label for="fileToUpload">Course Image</label>
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required
            >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="course_submitbtn" name="course_submitbtn">Submit</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
    </form>

    <H2 class="text-center" style="color:#dc3545"><?php echo $returning; ?></H2>
</div>
</div>
</div>
    
</body>
</html>