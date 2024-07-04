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
    <p class="bg-dark text-white p-2">List of Feedbacks</p>
    <?php
    $sql = "select * from feedback";
    $result = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($result) > 0){
    ?>
  
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Person Name</th>
                    <th scope="col">Person Email</th>
                    <th scope="col">Person Feedback</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    ;

                    echo '<th scope="row">'.$row['feedback_name'].'</th>';
                    echo '<td>'.$row['feedback_email'].'</td>';
                    echo '<td>'.$row['feedback_des'].'</td>';
                    echo '<td>';
                    echo '<form action="" method="post" class="d-inline">
                    <input type="hidden" name="id" value='.$row["feedback_id"].'>
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
        $sql="delete from feedback where feedback_id={$_REQUEST['id']}";
    
    
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

</body>
</html>
