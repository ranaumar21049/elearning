<?php
require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['stu_name']) && !isset($_SESSION['admin_name'])){
    header("location: login.php");
}


$returning="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$feedback_desc=$_POST['feedback_desc'];
  
    $query="INSERT INTO feedback (feedback_name,feedback_email,feedback_des) VALUES ('$name','$email','$feedback_desc')";

    $query2=mysqli_query($mysqli,$query);
    if($query2)
    {
        $returning = "Your feedback submit successfully.";

       
    }
    else
    {
      $returning = "There is some error.";
    }
  
}
?>

<!-- header  -->

<?php include 'headers.php';?>

<!-- header end  -->



<!-- course page banner  -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="images/feedback.jpg" class="course-img" alt="feedback"
            style="height: 800px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>





<div class="container mt-4" id="feedback">
    <h1 class="text-center mb-4">Your Feedback</h1>

    <div class="row">
        <div class="col-md-10">
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Enter your Name"><br>
                <input type="email" class="form-control" name="email" placeholder="Enter your E-mail"><br>
                <textarea name="feedback_desc" class="form-control"  placeholder="Your Feedback" style="height: 150px;"></textarea><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit"><br><br>
            </form>
            <H2 class="text-center" style="color:#dc3545;"><?php echo $returning; ?></H2>
        </div>

        
    </div>

</div>




<!-- footer  -->

<?php include 'footer.php';?>

<!-- footer end  -->



  

</body>

</html>