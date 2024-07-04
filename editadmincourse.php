<?php

require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}

include ('adminheader.php');

$returning='';



if(isset($_POST['reupdate'])){
$cid=$_POST['course_id'];
$name=$_POST['course_name'];
$author_name=$_POST['course_author_name'];
$desc=$_POST['course_desc'];
$duration=$_POST['course_duration'];
$original_price=$_POST['course_original_price'];
$price=$_POST['course_price'];
$file_tmp =$_FILES['fileToUpload']['tmp_name'];
$file_name = $_FILES['fileToUpload']['name'];

move_uploaded_file($file_tmp,"images/course_images/".$file_name);
$sql="UPDATE  course SET course_id='$cid',course_name='$name',course_desc='$desc',course_author='$author_name',course_img='$file_name',course_duration='$duration',course_price='$price',course_original_price='$original_price' where course_id='$cid'";

if($mysqli->query($sql)==TRUE)
{
    $returning = "Update SuccessFully.";

   
}
else
{
  $returning = "Unable to Update";
}
}

?>
<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>



<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course Details</h3>
    <?php
    if(isset($_POST['view'])){
        $sql="Select * from course where course_id={$_REQUEST['id']}";
        $result=$mysqli->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
            if(isset($row['course_id'])){
                echo $row['course_id'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if(isset($row['course_name'])){
                echo $row['course_name'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="course_author_name">Course Author</label>
            <input type="text" class="form-control" id="course_author_name" name="course_author_name" value="<?php
            if(isset($row['course_author'])){
                echo $row['course_author'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2  required
            ><?php
            if(isset($row['course_desc'])){
                echo $row['course_desc'];
            }?></textarea>
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php
            if(isset($row['course_duration'])){
                echo $row['course_duration'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php
            if(isset($row['course_original_price'])){
                echo $row['course_original_price'];
            }?>" required
            >
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php
            if(isset($row['course_price'])){
                echo $row['course_price'];
            }?>" required
            >
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php
            if(isset($row['course_img'])){
                echo $row['course_img'];
            }?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload"
            >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="reupdate" name="reupdate">Update</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
    </form>

    <H2 class="text-center" style="color:#dc3545;"><?php echo $returning; ?></H2>
</div>
</div>
</div>

    
</body>
</html>