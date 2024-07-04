<?php
<div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if(isset($row['course_name'])){
                echo $row['course_name'];
            }?>"  required
            >
        </div>



        require_once "dbconnection.php";
$sql = "SELECT COUNT(*) FROM course";
$result = $mysqli->query($sql);
if (!$result) {
    die('Error: ' . $mysqli->error); // Add error handling for the query
}

$count = $result->fetch_assoc()['COUNT(*)']; // Fetch the count value
var_dump($count);
$sql1 = "SELECT COUNT(*) FROM student";
$result1 = $mysqli->query($sql1);
if (!$result1) {
    die('Error: ' . $mysqli->error); // Add error handling for the query
}

$count1 = $result1->fetch_assoc()['COUNT(*)']; // Fetch the count value
var_dump($count1);
?>