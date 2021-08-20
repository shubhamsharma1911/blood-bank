<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INS B-Bank</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/letter-249064_640-removebg-preview.png" rel="icon">
  <link href="css/logo3-removebg-preview (1).png" rel="apple-touch-icon">
    

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

</head>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/letter-249064_640-removebg-preview.png" alt="">
        <span>INS B-Bank</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
        
   
        <?php 
                if( isset($_SESSION['user'])){
            ?>
             <li class="dropdown "><a href="profile.php" class="getstarted scrollto "><span>Hi,<?php echo $_SESSION["user"]; ?></span> <i class="bi bi-chevron-down"></i></a></li>
         
            <?php
                } else if(isset($_SESSION['ruser'])){

?>
<li class="dropdown "><a href="profile.php" class="getstarted scrollto "><span>Hi,<?php echo $_SESSION["ruser"]; ?></span> <i class="bi bi-chevron-down"></i></a> </li>
<li > <a href="logout.php"><i class="bi-power" style="font-size: 30px;"></i></a></li>
<?php  

                }
                else{
            ?>
             
             <li><a class="nav-link scrollto " href="login.php">Login</a></li>
            <li><a href="register.php" class="getstarted scrollto active">Register </a> </li>
            
          </li>
        
            <?php
                }
            ?>
      
    
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->