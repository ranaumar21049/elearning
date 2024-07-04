<?php
session_start();
if(!isset($_SESSION['stu_name']) && !isset($_SESSION['admin_name'])){
    header("location: login.php");
}
?>

<!-- header  -->

<?php include 'headers.php';?>

<!-- header end  -->



<!-- course page banner  -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="images/contact-us-2993000_1280.jpg" class="course-img" alt="contact"
            style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>





<!-- include contact form  -->


<?php include 'contact.php';?>


<!-- footer  -->

<?php include 'footer.php';?>

<!-- footer end  -->



  

</body>

</html>