<?php


require_once "dbconnection.php";


$returning="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$contact_desc=$_POST['contact_desc'];
  
    $query="INSERT INTO contact (contact_name,contact_email,contact_subject,contact_desc) VALUES ('$name','$email','$subject','$contact_desc')";
    
    $query2=mysqli_query($mysqli,$query);
    if($query2)
    {
        $returning = "Your message send successfully.";

       
    }
    else
    {
      $returning = "There is some error.";
    }
  
}
?>


<div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact Us</h2>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea  class="form-control"  placeholder="How can we help you." name="contact_desc" style="height: 150px;"></textarea><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Send"><br><br>
            </form>
            <H2 class="text-center" style="color:#dc3545;"><?php echo $returning; ?></H2>
        </div>

        <div class="col-md-4 text-center text-white stripe">
            <h4>TechStudio</h4>
            <p>TechStudio Near Iqbal town campus Islambad Punjab - 834405 <br>
                Ph:00000000000 <br>
                www.techstudio.com
            </p>
        </div>
    </div>

</div>

