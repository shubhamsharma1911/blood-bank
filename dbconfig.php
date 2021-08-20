<?php
//####### Start of dbconfig.php #######
// ENTER DB credentials.
define('DB_HOSTa','localhost');
define('DB_USERa','id17453977_root');
define('DB_PASSa','Ss@123456789');
define('DB_NAMEa','id17453977_bbank');

$pdo = new PDO('mysql:host=localhost; port=3306;dbname=id17453977_bbank', 
   'id17453977_root', DB_PASSa);
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$conn = mysqli_connect(DB_HOSTa,DB_USERa,DB_PASSa,DB_NAMEa);
if(!$conn){
    die("Connection Failed ". mysqli_connect_error());
}

// Establish database connection using PDO.
try
{
$dbh = new PDO("mysql:host=".DB_HOSTa.";dbname=".DB_NAMEa,DB_USERa, DB_PASSa,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

 
// Establish database connection using MYSQLI.
	$db = mysqli_connect(DB_HOSTa, DB_USERa, DB_PASSa, DB_NAMEa);
	// Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //####### End of dbconfig.php #######
?>