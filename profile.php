<?php
    session_start();
    include_once('dbconfig.php');
    if(! isset($_SESSION['user']))
        header("Location: index.php");
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
<?php include("header.php") ?>
  <main id="main">

    
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            
            <p><?php echo "Welcome ".$_SESSION["user"]; ?> <a href="logout.php"><i class="bi-power"></i></a></p>
          </header>
  
          <div class="row" style="margin-left: 15%;margin-right: 15%;">
  
           
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="400">
              <a href="addr.php" >
                <img src="assets/img/solo song (1).png" class="img-fluid" alt="">
                <h3>Add blood info</h3>
               <span style="font-size: 27px;"><b>click here!</b></span></a>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
              <a href="hr.php">
                <img src="assets/img/folk song solo.png" class="img-fluid" alt="">
                <h3>check requests</h3>
                <span style="font-size: 27px;"><b>click here!</b></span></a>
              </div>
            </div>
  
          </div>
      
        
        
  
        </div>
  
      </section>

  
  </main><!-- End #main -->
  
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<!--  Main JS File -->
<script src="assets/js/main.js"></script>


</html>