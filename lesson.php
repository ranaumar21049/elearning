<?php
require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');
?>
<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none" method="post">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course ID</label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <?php
    $sql="Select course_id from course";
    $result_course=$mysqli->query($sql);
    while($row_course=$result_course->fetch_assoc()){
        if(isset($_REQUEST['checkid']) && $_REQUEST['checkid']==$row_course['course_id']){
            $sql="Select * from course where course_id= {$_REQUEST['checkid']}";
            $result_single_course=$mysqli->query($sql);
            $row_single_course=$result_single_course->fetch_assoc();
            if(($row_single_course['course_id']==$_REQUEST['checkid'])){
                $_SESSION['course_id']=$row_single_course['course_id'];
                $_SESSION['course_name']=$row_single_course['course_name'];?>
                <h3 class="mt-4 bg-dark text-white p-3">Course ID:<?php if(isset($row_single_course['course_id'])){ echo $row_single_course['course_id'];}?>
                Course Name:<?php if(isset($row_single_course['course_name'])){ echo $row_single_course['course_name'];}?></h3>
                <?php
                $sql="Select * from lesson where course_id ={$_REQUEST['checkid']}";
                $result_lessons=$mysqli->query($sql);

                echo '<table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Lesson ID</th>
                        <th scope="col">Lesson Name</th>
                        <th scope="col">Lesson Link</th>
                        
                    </tr>
                </thead>
                <tbody>';
                while($row_lessons=$result_lessons->fetch_assoc()){
                    echo '<tr>';

                    echo '<th scope="row">'.$row_lessons['lesson_id'].'</th>';
                    echo '<td>'.$row_lessons['lesson_name'].'</td>';
                    echo '<td>'.$row_lessons['lesson_link'].'</td>';
                    echo '<td>';
                    
                    echo '</td></tr>';

                }
                echo '</tbody>
                </table>';
            }
            
            else{
                echo '<div class="alert alert-dark mt-4" role="alert">
                 Course Not Found !</div>';
            }
        }
        
        
    }
    ?>
</div>
<?php
if(isset($_SESSION['course_id'])){
    echo '<div>
        <a class="btn btn-danger boxbtn" href="addlesson.php"><i class="fas fa-plus fa-2x"></i></a>
    </div>';
}
?>
</body>
</html>
