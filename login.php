<?php
    session_start();
    
   
   
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


   
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            
            <p>Choose Your Login</p>
          </header>
  
          <div class="row" style="margin-left: 15%;margin-right: 15%;">
  
           
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="400">
              <a href="hlogin.php" >
                <img src="assets/img/solo song (1).png" class="img-fluid" alt="">
                <h3>Hospital login</h3>
               <span style="font-size: 27px;"><b>login here!</b></span></a>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
              <a href="rlogin.php">
                <img src="assets/img/folk song solo.png" class="img-fluid" alt="">
                <h3>Receiver login</h3>
                <span style="font-size: 27px;"><b>login here!</b></span></a>
              </div>
            </div>
  
          </div>
      
        
        
  
        </div>
  
      </section><!-- End Values Section -->
  

    

    

  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>