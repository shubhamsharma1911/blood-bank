<?php
 session_start();
if(! isset($_SESSION['user']))
header("Location: hlogin.php");

require_once "dbconfig.php";


?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INS B-Bank</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript" language="JavaScript"></script>


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

        

            <article class="entry entry-single">

            <div id="example3">        
<h1 style="text-align: center;color:blue">Blood Requests for Your Hospital</h1><br>



<div class="row">
<?php 
                            include_once('dbconfig.php');
                            echo('<table border="1">'."\n");
                            $n = $_SESSION['phno'];
                            $stmt = $pdo->query("SELECT receiver.name,
                              receiver.phno as ph,
                              receiver.blood_type,
                              hospital.phno
                            FROM requests
                            JOIN receiver
                              ON requests.rname = receiver.usercode
                            JOIN hospital
                              ON requests.phno = hospital.phno
                            ");
                            while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
                              if ($row['phno'] == $n) {
                                echo "<tr><td>";
                                echo(htmlentities($row['name']));
                                echo("</td><td>");
                                echo(htmlentities($row['ph']));
                                echo("</td><td>");
                                echo(htmlentities($row['blood_type']));
                                echo("</td></tr>");
                                 }
                            }
                                            ?></div>



</div>  



            </article>
           
          </div>

 



      

        </div>

      </div>
    </section>
   
  </main><!-- End #main -->



<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<!--  Main JS File -->
<script src="assets/js/main.js"></script>


  
</body>


</html>