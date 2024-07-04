<?php

require_once "dbconnection.php";

session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');

$returning='';



if(isset($_POST['reupdate'])){
$sid=$_POST['stu_id'];
$name=$_POST['stu_name'];
$stu_email=$_POST['stu_email'];
$stu_occ=$_POST['stu_occ'];

$sql="UPDATE  student SET stu_id='$sid',stu_name='$name',stu_email='$stu_email',stu_occ='$stu_occ' where stu_id='$sid'";

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
    <h3 class="text-center">Update Student Details</h3>
    <?php
    if(isset($_POST['view'])){
        $sql="Select * from student where stu_id={$_REQUEST['id']}";
        $result=$mysqli->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_id">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php
            if(isset($row['stu_id'])){
                echo $row['stu_id'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php
            if(isset($row['stu_name'])){
                echo $row['stu_name'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="stu_email">Student Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php
            if(isset($row['stu_email'])){
                echo $row['stu_email'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="stu_occ">Student Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php
            if(isset($row['stu_occ'])){
                echo $row['stu_occ'];
            }?>"  required
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