<?php
$servername=$_POST['servername'];
$ipaddress=$_POST['ipaddress'];
$macaddress=$_POST['macaddress'];
$os=$_POST['os'];
$licensekey=$_POST['licensekey'];
$sqldata=$_POST['sqldata'];
$sqlversion=$_POST['sqlversion'];
$sqllicensekey=$_POST['sqllicensekey'];
$loai=$_POST['loai'];
$loch=$_POST['loch'];
$remarks=$_POST['remarks'];
$antivirus=$_POST['antivirus'];
$antivirusvalidity=$_POST['antivirusvalidity'];

//Database connection
require_once("db/config.php");

$conn=mysql_connect($server, $username, $password); //new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
if(!$conn)
{
	echo "connection not established";
	exit;
}

if (!mysql_select_db('computerdetails', $conn)) {
    echo 'Could not select database';
    exit;
}

//mysql query to insert value to database
$sql    = "INSERT INTO serverdetailsform (id, servername, ipaddress, macaddress, os, licensekey, sqldata, sqlversion, sqllicensekey, loai, loch, remarks, antivirus, antivirusvalidity) VALUES ('$id','$servername', '$ipaddress', '$macaddress', '$os', '$licensekey', '$sqldata', '$sqlversion', '$sqllicensekey', '$loai', '$loch', '$remarks', '$antivirus', '$antivirusvalidity')";
//echo $sql;
$result = mysql_query($sql, $conn);


//if value inserted successfully display success message
if($result)
{
   
   echo '<div style="color:#008000; font-weight:bold;">Registered successfully..!!</div>';
   //echo 'COMMENTS :'.$comments;
}else
{
//error message
   echo '<div style="color:#c24f00; font-weight:bold;">unable to register !!</div>';
}
?>