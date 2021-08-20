<?php
    session_start();
    if( isset($_SESSION['user'])){
      header("Location: profile.php");
  }
    include_once("dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INS B-Bank</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="css/logo3-removebg-preview (1).png" rel="icon">
  <link href="css/logo3-removebg-preview (1).png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<?php include("header.php") ?>
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        
        <p>SignUp as Hospital</p>
      </header>

      <div class="row gy-4" >
      <div class="col-lg-6">

<div class="row gy-4">
  <img src="images/login.png" alt="">
</div>

</div>
<div class="col-lg-6" id="myForm">
       
<form  method="post" name="signup"  class="loginform" onSubmit="return valid();">
<div class="row gy-4" >
                        <div class="form-group form-input">
                              <input name="name"  type="text"  placeholder="Name" class="form-control" required>
                        </div>
                        
                        <div class="form-group form-input" > 
                             <input type="text" class="form-control" minlength="4" maxlength="10" name="usercode" id="usercode" onBlur="checkidAvailability()" placeholder="User Code(6 digit unique code for login)" value="" required />
                             <span id="user-id-availability-status" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group form-input">
                              <input type="email" class="form-control" name="email" id="email" onBlur="checkemailAvailability()" placeholder="Email Address" required="required">
                              <span id="user-email-availability-status" style="font-size:12px;"></span> 
                        </div>

                        <div class="form-group form-input">
                        <input name="phno"  type="text"  placeholder="Phone Number"  class="form-control" required>
                        </div>

                        <div class="form-group form-input">
                        <input name="city"  type="text"  placeholder="City"  class="form-control" required>
                        </div>
                        
                        <div class="form-group form-input">
                          <input name="password"  type="password"  placeholder="Create a Strong Password"  class="form-control" required>
                        </div>
                        <div class="form-group form-input">
                          <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                        </div>

                        <div class="g-recaptcha"  data-sitekey="6LcjZuQaAAAAADiE76PVZdDJYaeLObhZzWa3zbrN"></div>
      <br/>

                        <div class="col-md-12 text-center">
                           
                               <input name="signup" type="submit" value="Create An Account" id="submit" onclick="submitform()" class="up-in">
                             <a href="login.php"> <input type="button" value="or Log In" class="getstarted" id="tolog"> </a>
                           
                        </div>
                      
                   
</div>
                    </form>
                    <?php

if(isset($_POST['signup']))
{
$fname=$_POST['name'];
$email=$_POST['email']; 
$mobile=$_POST['city'];
$phno=$_POST['phno'];
$idno=$_POST['usercode'];
$password=$_POST['password']; 
$sql="INSERT INTO  hospital (name,email,city,usercode,phno,password) VALUES(:fname,:email,:mobile,:rollno,:phno,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':rollno',$idno,PDO::PARAM_STR);
$query->bindParam(':phno',$phno,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
header("Location: rlogin.php");
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

?>

        
</div>         </div>
    </div>  
    </div>    
  </section>
  

   
   
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  

	  
        
      <script>
//This function checks email-availability-status
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'usercode='+$("#usercode").val(),
type: "POST",
success:function(data){
$("#user-id-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}


function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}

</script>
<script> 
    function submitform(){ 
        $('#registeration').find('form').submit(); 
        $('.clearFields').val(''); 
    } 
</script> 

				<!-- JS -->
			
    <script src="js/jquery.min.js"></script>


 

</body>

</html>