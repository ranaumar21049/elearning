<?php

require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}


$returning='';

if(isset($_POST['lesson_submitbtn']))
{
    $lesson_name = $_REQUEST['lesson_name'];
    $course_name = $_REQUEST['course_name'];
    $course_id = $_REQUEST['course_id'];
    $lesson_desc = $_REQUEST['lesson_desc'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_name = $_FILES['fileToUpload']['name'];

    move_uploaded_file($file_tmp, "images/lesson_videos/".$file_name);

    $stmt = $mysqli->prepare("INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $lesson_name, $lesson_desc, $file_name, $course_id, $course_name);

    if($stmt->execute()){
        $returning = "Added successfully";
    } else {
        $returning = "Not added successfully";
    }

    $stmt->close();
}


include ('adminheader.php');
?>

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
             if(isset($_SESSION['course_id'])){echo $_SESSION['course_id']; }?>"  readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
             if(isset($_SESSION['course_name'])){echo $_SESSION['course_name']; }?>"  readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name"  required>
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea type="text" class="form-control" id="lesson_desc" name="lesson_desc"  row=2 required></textarea>
        </div>
        <div class="form-group">
            <label for="fileToUpdate">Lesson Link</label>
            <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" required
            >
        </div>
        
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lesson_submitbtn" name="lesson_submitbtn">Submit</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
    </form>

    <H2 class="text-center" style="color:#dc3545"><?php echo $returning; ?></H2>
</div>
</div>
</div>
    
</body>
</html>