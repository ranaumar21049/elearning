<?php
require_once "dbconnection.php";
session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');
?>
<div class="col-sm-9 mt-5 text-center">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Students</p>
    <?php
    $sql = "select * from student";
    $result = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($result) > 0){
    ?>
  
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    ;

                    echo '<th scope="row">'.$row['stu_id'].'</th>';
                    echo '<td>'.$row['stu_name'].'</td>';
                    echo '<td>'.$row['stu_email'].'</td>';
                    echo '<td>';
                    echo '<form action="editstudent.php" method="post" class="d-inline">
                    <input type="hidden" name="id" value='.$row["stu_id"].'>
                    <button type="submit" class="btn btn-info ml-3" name="view"><i class="fas fa-pen"></i></button>
                    </form>
                    <form action="" method="post" class="d-inline">
                    <input type="hidden" name="id" value='.$row["stu_id"].'>
                    <button type="submit" class="btn btn-secondary" name="delete"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    
                    </td></tr>';
                }?>
            </tbody>
        </table>
    
    <?php } else {
        echo "0 Result";
    }
    
    if(isset($_REQUEST['delete'])){
        $sql="delete from student where stu_id={$_REQUEST['id']}";
    
    
    if($mysqli->query($sql)){
        echo "<meta http-equiv='refresh' content='0;URL=?deleted'/>";
    }
    else{
        echo "Unable to delete data";
    }
}
        ?>
</div>
</div>
<div>
    <a class="btn btn-danger boxbtn" href="addstudent.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</body>
</html>
