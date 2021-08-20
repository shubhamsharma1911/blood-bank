<?php
session_start();
if(! isset($_SESSION['user']))
header("Location: hlogin.php");

require_once "dbconfig.php";


if ( isset($_POST['submit']) 
      
     ) {




 




    $sql = "INSERT INTO blood_sample_info (hname, email, phno, blood, city) 
              VALUES (:hname, :email, :phno, :blood, :city)";
   
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        
        ':hname' => $_SESSION['user'], 
        ':email' => $_POST['email'], 
        ':phno' => $_SESSION['phno'], 
       
        ':blood'=> $_POST['blood'], 
        ':city'=> $_POST['city'],
       

        
    ));


   


    header( 'Location: resources.php' ) ;
    return;
}
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
 
</head>

<body>
<!-- ======= Header ======= -->
<?php include("header.php") ?>

  <main id="main">

    
    <section id="blog" class="blog" style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

            <div id="example3">        
<form method="post" class="p-3" id="form3" enctype="multipart/form-data">
<div class="form-group">
<h1 style="text-align: center;color:blue">Add Blood Info</h1>

</br>




<div class="form-group">
<p>Hospital Name:
<input type="text" name="hname" class="form-control" required></p>
 </p>  

       


<p>Email :
<input type="text" name="email" class="form-control" required></p>
<p>Phone Number :
<input type="text" name="phno" class="form-control" required></p>
<p>blood type :
<input type="text" name="blood" class="form-control" required></p>

<p>city :
<input type="text" name="city" class="form-control" required></p>
</div>
</br>

         

<p><input type="submit" name="submit" value="Add info"  class="btn btn-primary"/></p>

</div>

</form>






</div>  




            </article>
           
          </div>

 



      

        </div>

      </div>
    </section>
   
  </main><!-- End #main -->


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</html>