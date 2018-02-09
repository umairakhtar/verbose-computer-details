<?php
if ($_POST) {

	$username = $_POST['username'];
	$password = $_POST['password'];
} else {
	$username = "";
	$password = "";
}

//Database connection
$filePath = 'db/config.php';
require_once ($filePath);

$conn = mysql_connect($server, $username, $password);
//new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
if (!$conn) {
	echo "connection not established";
	exit ;
}

if (!mysql_select_db('computerdetails', $conn)) {
	echo 'Could not select database';
	exit ;
}
// Secure the credentials
if ($_POST) {

	$username = mysql_real_escape_string($_POST['username']);

	$password = mysql_real_escape_string($_POST['password']);
} else {
	$username = "";
	$password = "";
}

$query = "SELECT COUNT(*) AS `total` FROM `login` WHERE `username` = '$username' AND `password` = '$password'";

$result = mysql_query($query);

$row = mysql_fetch_assoc($result);

if ($row['total'] == 1) {
	header('Location: main.php');
	//echo '<div style="color:#008000; font-weight:bold;">Login Successful<br><a href="main.php">View Registered Users</a></div>';
} else {

	echo '<div style="color:#008000; font-weight:bold;">Incorrect username or password</div>';
}
?>
