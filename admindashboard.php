<?php

session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
require_once "dbconnection.php";
$sql = "SELECT COUNT(*) FROM course";
$result = $mysqli->query($sql);
if (!$result) {
    die('Error: ' . $mysqli->error); // Add error handling for the query
}

$count = $result->fetch_assoc()['COUNT(*)']; // Fetch the count value

$sql1 = "SELECT COUNT(*) FROM student";
$result1 = $mysqli->query($sql1);
if (!$result1) {
    die('Error: ' . $mysqli->error); // Add error handling for the query
}

$count1 = $result1->fetch_assoc()['COUNT(*)']; // Fetch the count value

include ('adminheader.php');
?>
            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $count;?></h4>
                                <a class="btn text-white" href="admincourses.php">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Student</div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $count1;?></h4>
                                <a class="btn text-white" href="student.php">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white mb-3" style="max-width: 18rem; background-color: #0091f7;">
                            <div class="card-header">Sold</div>
                            <div class="card-body">
                                <h4 class="card-title">4</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mx-5 mt-5 text-center">
                    <!-- Table -->
                    <p class="bg-dark text-white p-2">Courses Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">22</th>
                            <td>100</td>
                            <td>Ali@gmail.com</td>
                            <td>10/08/2023</td>
                            <td>2000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete"><i
                            class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                            <th scope="row">20</th>
                            <td>134</td>
                            <td>Ahmed@gmail.com</td>
                            <td>04/06/2023</td>
                            <td>4000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete"><i
                            class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                            <th scope="row">21</th>
                            <td>123</td>
                            <td>Hassan@gmail.com</td>
                            <td>14/02/2022</td>
                            <td>7000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete"><i
                            class="fa-solid fa-trash"></i></button></td>
                            </tr>
                            <tr>
                            <th scope="row">22</th>
                            <td>150</td>
                            <td>Maryam@gmail.com</td>
                            <td>30/01/2021</td>
                            <td>6000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete"><i
                            class="fa-solid fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</body>

</html>

<?php


?>