<?php

require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');

$returning='';

if(isset($_POST['stu_submitbtn']))
{
$name=$_POST['stu_name'];
$stu_email=$_POST['stu_email'];
$stu_pass=$_POST['stu_pass'];
$stu_occ=$_POST['stu_occ'];




    $query="INSERT INTO student (stu_name,stu_email,stu_pass,stu_occ) VALUES ('$name','$stu_email','$stu_pass','$stu_occ')";
    $query2=mysqli_query($mysqli,$query);
    if($query2)
    {
        $returning = "Add Student SuccessFully.";

       
    }
    else
    {
      $returning = "Unable to Add Student";
    }
}
?>

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name"  required
            >
        </div>
        <div class="form-group">
            <label for="stu_email">Student Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email"  required
            >
        </div>
        <div class="form-group">
            <label for="stu_pass">Student Password</label>
            <input type="password" class="form-control" id="stu_pass" name="stu_pass" row=2 required
            >
        </div>
        <div class="form-group">
            <label for="stu_occ">Student Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ"  required
            >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="stu_submitbtn" name="stu_submitbtn">Submit</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
    </form>

    <H2 class="text-center" style="color:#dc3545"><?php echo $returning; ?></H2>
</div>
</div>
</div>
    
</body>
</html>