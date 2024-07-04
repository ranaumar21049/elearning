<?php

require_once "dbconnection.php";

session_start();
if(!isset($_SESSION['admin_name'])){
    header("location: login.php");
}
include ('adminheader.php');

$returning='';



if(isset($_POST['reupdate'])){
$admin_email=$_POST['admin_email'];
$admin_pass=$_POST['admin_pass'];


$sql="UPDATE  admin SET admin_pass='$admin_pass' where admin_email='$admin_email'";

if($mysqli->query($sql)==TRUE)
{
    $returning = "Update SuccessFully.";

   
}
else
{
  $returning = "Unable to Update";
}
}

?>
<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>



<div class="col-sm-9 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Change Password</h3>
    <?php
        $sql="Select * from admin where admin_id=1";
        $result=$mysqli->query($sql);
        $row=$result->fetch_assoc();
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="admin_email">Admin Email</label>
            <input type="text" class="form-control" id="admin_email" name="admin_email" value="<?php
            if(isset($row['admin_email'])){
                echo $row['admin_email'];
            }?>"  required
            >
        </div>
        <div class="form-group">
            <label for="admin_pass">Admin New Password</label>
            <input type="password" class="form-control" id="admin_pass" name="admin_pass" value=""
             required
            >
        </div>
       
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="reupdate" name="reupdate">Update</button>
        </div>
    </form>

    <H2 class="text-center" style="color:#dc3545;"><?php echo $returning; ?></H2>
</div>
</div>
</div>

    
</body>
</html>