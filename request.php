<?php
require_once "dbconfig.php";
session_start();

$id = $_GET['user'];


 

    $sql = "INSERT INTO requests (rname, phno) 
              VALUES (  :rname, :user)";
   
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        
        ':rname' => $_SESSION['name'], 
    
        ':user' => $id, 
       
 

        
    ));
    $_SESSION['success'] = 'Blood Requested';
    header( 'Location: index.php' ) ;
    return;




?>

