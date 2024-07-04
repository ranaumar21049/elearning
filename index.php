<?php 
require_once "dbconnection.php";

$returning="";
if(isset($_POST['Submit']))
{
$name=$_POST['stuname'];
$email=$_POST['stuemail'];
$password=$_POST['stupass'];
$confirm_password=$_POST['stu_confirm_pass'];

$query="select * from student where stu_email='$email'";
$result=mysqli_query($mysqli,$query) ;
$count=mysqli_num_rows($result);
if($count<=0)
{
  if($password==$confirm_password)
  {
    $query="INSERT INTO student (stu_name,stu_email,stu_pass) VALUES ('$name','$email','$password')";
    
    $query2=mysqli_query($mysqli,$query);
    if($query2)
    {
        $returning = "Registered successfully.";

       
    }
    else
    {
      $returning = "There is some error.";
    }
  }
    else{
      $returning = "Password not matched";

    }
}
else{

  $returning = "Email Already  exit";
}
}
?>

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,null,null,window.location.href)
  }
</script>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStudio </title> 
    <!-- favicon  -->
  <link rel="icon" type="image/x-icon" href="images/logo1.png">
    <title>TechStudio</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url("images/book-1283865_1280.jpg");
  background-position: contain;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2.tag::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 136px;
  border-radius: 12px;
  background:#dc3545;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #dc3545;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #dc3545;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #dc3545;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #dc3545;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
.title{
  text-align:center;
  
}
.title1{
  text-align:center;
  color:#dc3545 !important;
  
  
}


    </style>
   </head>
<body>
  <div class="wrapper">
  <H2 class="title1"><?php echo $returning; ?></H2>
    <H2 class="title">Welcome to TechStudio</H2>
    <h2 class="tag">Registration</h2>
    <form action="" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" id="stuname" name="stuname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email"  id="stuemail" name="stuemail" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password"  id="stupass" name="stupass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password"  id="stu_confirm_pass" name="stu_confirm_pass" required>
      </div>
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit"  id="Submit" name="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
      
    </form>
  </div>
</body>
</html>