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

 <!-- courses section start -->
 <div class="container mt-5">
        <h1 class="text-center ">All Courses</h1>
        <div class="row">
         <?php
            $sql="Select *from course limit 12";
            $result=$mysqli->query($sql);
            if($result->num_rows>0){

                while($row=$result->fetch_assoc()){
                    $course_id=$row['course_id'];
                    echo '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">



                    <div class="card mt-4 ">
    
                        <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                            <img src="images/course_images/'.$row['course_img'].'" alt="java-photo" class="img-fluid"></a>
    
    
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                            <p class="card-text">'.$row['course_desc'].'</p>
    
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>RS '.$row['course_original_price'].' </del></small><span
                                    class="font-weight-bolder pl-1">RS '.$row['course_price'].'</span></p>
                                     <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
    
                        </div>
                    </div>
    
                </div>';
                }
            }
            ?> 

        <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/ethical1.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Ethical Hacking</h5>
                    <p class="card-text">Embark on a journey into ethical hacking with our comprehensive course.
                        Delve into the world of cybersecurity as you learn to assess and fortify digital
                        systems.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 33000</del></small><span
                            class="font-weight-bolder pl-1">RS 24000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/app-development-courses-1536x768.png" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">App Development</h5>
                    <p class="card-text">Discover the realm of app development in our hands-on course. Learn to
                        create mobile applications for both iOS and Android platforms using programming
                        languages like Swift and Kotlin. Explore the entire development lifecycle, from concept
                        and design to coding and deployment.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 45000</del></small><span
                            class="font-weight-bolder pl-1">RS 33000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div></a>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/FREE-Python-Course-For-Beginners.png" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title"> Python Programming with AI/ML</h5>
                    <p class="card-text">This course summarizes machine learning models from an implementation
                        perspective using python language. The course starts from the basics and advances to the
                        more complex problems; hence anyone with a basic understanding of programming can attend
                        this course.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 50000</del></small><span
                            class="font-weight-bolder pl-1">RS 30000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div></a>

        </div>







        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/web2.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title"> Web Development</h5>
                    <p class="card-text">Explore the world of web development in our comprehensive course. Learn
                        the fundamentals of HTML and CSS to create stunning and responsive web pages. Dive into
                        JavaScript to add interactivity and dynamic content. Gain hands-on experience with
                        popular frameworks and tools like React and Node.js and database mySQL.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 23000</del></small><span
                            class="font-weight-bolder pl-1">RS 13000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/image_2022-10-05_145804829.webp" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Freelancing</h5>
                    <p class="card-text">Unlock the potential of freelancing with our in-depth course. Master
                        the art of self-employment as you learn how to identify marketable skills, set
                        competitive prices, and effectively market your services. <br> By the course end, you'll
                        have the knowledge and tools needed to thrive as a successful freelancer in today's
                        dynamic and competitive digital landscape.We also learn fiver,upwork or so on.

                    </p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 31000</del></small><span
                            class="font-weight-bolder pl-1">RS 23000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/banner_6274ab14568c9.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Graphic Designing</h5>
                    <p class="card-text">Immerse yourself in the world of graphic design through our engaging
                        course. Explore the principles of visual communication,layout design. Develop
                        proficiency in industry-standard software like Adobe Creative Suite, while unleashing
                        your creativity your design instincts. By course completion, you'll be equipped with the
                        skills to craft captivating visuals for a variety of print and digital mediums.After
                        this you are able to making responsive designs and meet client requirements.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 25000</del></small><span
                            class="font-weight-bolder pl-1">RS 20000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/java.png" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">JavaScript Course</h5>
                    <p class="card-text">Unleash the power of JavaScript with our dynamic course. Dive into the fundamentals of programming using this versatile language, and learn to create interactive web experiences. Explore core concepts like variables, functions, and control structures, while also delving into more advanced topics like asynchronous programming and DOM manipulation.After this course you are about to work diiferent technologies with javascript.  </p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 15000</del></small><span
                            class="font-weight-bolder pl-1">RS 10000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/Image_-_E-Commerce_Website_.jpeg.webp" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Ecommerce Course</h5>
                    <p class="card-text">Embark on an e-commerce journey with our comprehensive course. Explore the intricacies of online business, from setting up a digital store to optimizing customer experiences. Learn about product management, payment gateways, and effective marketing strategies tailored for e-commerce. Dive into the world of analytics to make data-driven decisions. By the course end, you'll have the knowledge and skills to establish a successful online.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 60000</del></small><span
                            class="font-weight-bolder pl-1">RS 44000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/ggti_2.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Networking Course</h5>
                    <p class="card-text">"Dive into the realm of networking with our comprehensive course. Learn the fundamentals of designing, implementing, and managing computer networks. Explore concepts like IP addressing, routing, and network security. Gain hands-on experience configuring network devices and troubleshooting common issues. By the course completion, you'll have the skills to build and maintain robust networks that power modern communication.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 55000</del></small><span
                            class="font-weight-bolder pl-1">RS 45000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/maxresdefault.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Amazon Virtual Assistant</h5>
                    <p class="card-text">""Explore the world of Amazon virtual assistance through our specialized course. Learn how to effectively support businesses as a virtual assistant in the context of the Amazon marketplace. Master tasks like product research, listing optimization, customer communication, and order management. Gain insights into Amazon's policies and best practices.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 20000</del></small><span
                            class="font-weight-bolder pl-1">RS 15000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/supply-chain-management.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Supply Chain Management</h5>
                    <p class="card-text">"Delve into Supply Chain Management with our comprehensive course. Explore the end-to-end processes of planning, sourcing, producing, and delivering goods and services. Learn about logistics, inventory management, and demand forecasting. Gain insights into optimizing operations for efficiency and sustainability. By the course completion, you'll have all the knowledge.</p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 40000</del></small><span
                            class="font-weight-bolder pl-1">RS 25000</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xlg-4">

            <div class="card mt-4">

                <a href="" class="btn" style="text-align:left;margin: 0px; padding: 0px;">
                    <img src="images/cr.jpg" alt="java-photo" class="img-fluid"></a>


                <div class="card-body">
                    <h5 class="card-title">Creative writing</h5>
                    <p class="card-text">"Unleash your creativity through our immersive Creative Writing course. Explore various genres and writing styles, from fiction and poetry to non-fiction and screenwriting. Learn to craft compelling narratives, develop unique characters, and master the art of storytelling. Receive constructive feedback and refine your writing skills. By the course end, you'll have the tools to express yourself </p>

                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">Price: <small><del>RS 30000</del></small><span
                            class="font-weight-bolder pl-1">RS 2300</span></p> <a href=""
                        class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

                </div>
            </div>

        </div> -


    </div>-->

</div>



</div>



<!-- include contact form  -->


<?php include 'contact.php';?>


<!-- footer  -->

<?php include 'footer.php';?>

<!-- footer end  -->

  


</body>

</html>