<?php
session_start();
if(!isset($_SESSION['stu_name']) && !isset($_SESSION['admin_name'])){
    header("location: login.php");
}
require_once "dbconnection.php";
?>
<!-- header  -->

<?php include 'headers.php';?>

<!-- header end  -->



<!-- course page banner  -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="images/book-1283865_1280.jpg" class="course-img" alt="courses"
            style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<!-- main content starts -->

<main>


    <div class="container mt-5">
        <?php
        if(isset($_GET['course_id'])){
            $course_id=$_GET['course_id'];
            $sql="Select *from course where course_id='$course_id'";
            $result=$mysqli->query($sql);
            $row=$result->fetch_assoc();
        }
        ?>
        <div class="row">
            <div class="col-md-4">
            <img src="<?php echo 'images/course_images/' . $row['course_img']; ?>" alt="ethical hacking" class="card-img-top img-fluid">

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">Course Name: <?php echo $row['course_name']?></h2>
                    <p class="card-text">Description: <br><?php echo $row['course_desc']?>
                    </p>
                    <p class="card-text">Duaration: <?php echo $row['course_duration']?></p>

                    <form action="" method="post">
                        <p class="card-text d-inline"><small><del>Rs <?php echo $row['course_original_price']?></del></small>
                            <span class="font-weight-bolder pl-1">Rs <?php echo $row['course_price']?></span>
                        </p>
                        

                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right"
                            name="buy">Buy Now</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <h2 class="text-center">Course Outline</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Lesson No</th>
                    <th>Lesson Name</th>
                </tr>
            </thead>

            <tbody>

        <?php
        $sql="Select *from lesson where course_id='$course_id'";
        $result=$mysqli->query($sql);
        if($result->num_rows>0){
            $num=0;
            while($row=$result->fetch_assoc()){
                $num++;
        
             echo   '<tr>
                    <th>'.$num.'</th>
                    <th>'.$row['lesson_name'].'</th>
                </tr>';
                
            }
        }
                ?>




            </tbody>
        </table>

    </div>
</main>



<!-- main content ends -->












<!-- footer  -->

<?php include 'footer.php';?>

<!-- footer end  -->


</body>

</html>