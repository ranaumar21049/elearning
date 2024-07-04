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
        <img src="images/paymentimage.jpg" class="course-img" alt="payment"
            style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<div class="contain">
    <h2 class = "text-center my-4">Payment Status</h2>
    <form action="" method = "post">
        <div class="row form-group">
            <label class = "offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class ="form-control mx-3">
            </div>
        <div> <input type="submit" class = "btn btn-primary mx-4 px-5" value = "View">
        </div>

    </div>
        
       
    </form>
</div>




<!-- include contact form  -->


<?php include 'contact.php';?>


<!-- footer  -->

<?php include 'footer.php';?>

<!-- footer end  -->



  

</body>

</html>