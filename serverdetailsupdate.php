<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php include ("db/db.php"); ?>
<?php
require_once("db/config.php");
$conn = mysql_connect($server, $username, $password);

mysql_select_db("computerdetails") or die(mysql_error());
if ( !isset ($_GET['id']) || $_GET['id'] == "" ) {
	include ("404.php");
	die();
}

$requested_id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT * FROM serverdetailsform WHERE id= '{$requested_id}' LIMIT 1";
$query = mysql_query($sql) or die(mysql_error());

$edit_rows = mysql_fetch_assoc($query);



	if (isset($_POST['edit'])) {
		$id = mysql_real_escape_string($_POST['id']);
		$servername = mysql_real_escape_string($_POST['servername']);
		$ipaddress = mysql_real_escape_string($_POST['ipaddress']);
		$macaddress = mysql_real_escape_string($_POST['macaddress']);
		$os = mysql_real_escape_string($_POST['os']);
		$licensekey = mysql_real_escape_string($_POST['licensekey']);
		$sqldata = mysql_real_escape_string($_POST['sqldata']);
		$sqlversion = mysql_real_escape_string($_POST['sqlversion']);
		$sqllicensekey = mysql_real_escape_string($_POST['sqllicensekey']);
		$loai = mysql_real_escape_string($_POST['loai']);
		$loch = mysql_real_escape_string($_POST['loch']);
		$antivirus = mysql_real_escape_string($_POST['antivirus']);
		$antivirusvalidity = mysql_real_escape_string($_POST['antivirusvalidity']);
		$remarks = mysql_real_escape_string($_POST['remarks']);
		
		$sql = "UPDATE serverdetailsform SET servername = '{$servername}', ipaddress = '{$ipaddress}', macaddress = '{$macaddress}', os = '{$os}', licensekey = '{$licensekey}', sqldata = '{$sqldata}', sqlversion = '{$sqlversion}', sqllicensekey = '{$sqllicensekey}', loai = '{$loai}', loch = '{$loch}', remarks = '{$remarks}', antivirus = '{$antivirus}', antivirusvalidity = '{$antivirusvalidity}' WHERE id = '{$requested_id}'";
		
		mysql_query($sql) or die(mysql_error());
		
		header("location: serverdetailsupdate.php?id='{$requested_id}'&success");
		exit();
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
		table, th{
			border:1px solid #699;
		}
		td {
			padding: 10px;
			}
		thead {
			background: #D2E6EA;
			}
			</style>
	<meta charset=utf-8" />
	<link href="update.css" rel="stylesheet" type="text/css" />
	<title>the project</title>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>
		<script type="text/javascript" src="js/jquery/jquery.mask.js"></script>
		<script type="text/javascript" src="js/jquery/jquery.mask.min.js"></script>

		
<script type="text/javascript">
			jQuery(function($){
				$("#macaddress").mask("AA-AA-AA-AA-AA-AA");
				$("#licensekey").mask("AAAAA/AAAAA/AAAAA/AAAAA/AAAAA");
				$("#sqllicensekey").mask("AAAAA-AAAAA-AAAAA-AAAAA-AAAAA");
				/* $("#ipaddress").mask("0ZZ.0ZZ.0ZZ.0ZZ", {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  }); */

			});
			
$(function(){

$("#computerdetails").submit(function(event){
//alert('1');
$.post( "serverdetailssubmit.php", $("#computerdetails").serialize(), function(data){
//alert(data);
$("#message").html(data);

});

event.preventDefault();


});

});

			</script>
		<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>

		<script type="text/javascript">
			// When the browser is ready...
			$(function() {

				// Setup form validation on the #register-form element
				$("#computerdetails").validate({

					// Specify the validation rules
					rules : {
				

						ipaddress : {
							minlength : 11,
							maxlength : 15
						},
						macaddress : {
							minlength : 17,
							maxlength : 17
						},						
						licensekey : {
							length : 25
						},
						sqlversion : {
							digits : true
						},
						sqllicensekey : {
							length : 25
						},
						agree : "required"
					},
					// Specify the validation error messages
					messages : {
						
						ipaddress : {

							minlength : "Enter a valid ip address",
							maxlength : "Enter a valid ip address"
						},
						macaddress : {
							minlength : "Enter a valid mac address",
							maxlength : "Enter a valid mac address"
						},

						licensekey : {
							length : "Enter 25 digits"
						},

						sqlversion : {
							digits : "Enter only numbers"
						},

						sqllicensekey : {
							length : "Enter 25 digits"
						},
						agree : "Please accept our policy"
					},
					submitHandler : function(form) {
						form.submit();
					}
				});

			});
</script>
<script src="js/jquery.input-ip-address-control.js"></script>
<script>
		$(function(){
		    $('#ipaddress').ipAddress();
		  
		});

		//mask input type text (ipv4) : ___.___.___.___
		//mask input type text (ipv6) : ____:____:____:____:____:____:____:____
	</script>
	<SCRIPT LANGUAGE="JavaScript">
	function SecListBox(ListBox,text,value)
	{
	try
	{
	var option=document.createElement("OPTION");
	option.value=value;
	option.text=text;
	ListBox.options.add(option)
	}
	catch(er)
	{
	alert(er)
	}
	}
	function FirstListBox()
	{
	try
	{
	var count=document.getElementById("lstBox").options.length;
	for(i=0;i<count;i++)
	{
	if(document.getElementById("lstBox").options[i].selected)
	{
	SecListBox(document.getElementById("loai"),document.getElementById("lstBox").options[i].value,document.getElementById("lstBox").options[i].value);document.getElementById("lstBox").remove(i);
	break
	}
	}
	}
	catch(er)
	{
	alert(er)
	}
	}
	function SortAllItems()
	{
	var arr=new Array();
	for(i=0;i<document.getElementById("lstBox").options.length;i++)
	{
	arr[i]=document.getElementById("lstBox").options[i].value}arr.sort();
	RemoveAll();
	for(i=0;i<arr.length;i++)
	{
	SecListBox(document.getElementById("lstBox"),arr[i],arr[i])}}function RemoveAll(){try{document.getElementById("lstBox").options.length=0
	}
	catch(er)
	{
	alert(er)
	}
	}
	function SecondListBox()
	{
	try
	{
	var count=document.getElementById("loai").options.length;
	for(i=0;i<count;i++)
	{
	if(document.getElementById("loai").options[i].selected){SecListBox(document.getElementById("lstBox"),document.getElementById("loai").options[i].value,document.getElementById("loai").options[i].value);document.getElementById("loai").remove(i);
	break
	}
	}
	SortAllItems()
	}
	catch(er)
	{
	alert(er)
	}
	}
</SCRIPT>
</head>

<body>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="#">Server Details</a>
                <ul>
                    <li><a href="serverdetailsadd.php">Add</a>
                    </li>
                    <li><a href="serverdetailsview.php">View</a>
                    </li>
					<li><a href="main.php">Index</a>
                    </li>
                </ul>
            </li>
			
                </ul>
            </li>
        </ul>
    </div>
</div>
		<p>
            <input type="button" id="button" onclick="javascript:window.location.href='logout.php'" value="logout" />
        </p>
<br><br>
<div class="container">
	<div class="content">
	<?php
		/*print_r($edit_rows);*/
	?>
	<?php if ( isset ($_GET['success'])) { ?>
	<h3 style="color: #71B23B;">The record was updated successfully!</h3>
		<?php } ?>
		<div class="separator"></div>
		<h2 align="center">Update Serverdetails Form</h2>
		<div class="separator"></div>
		<form method="POST" action="<?php echo basename($_SERVER['PHP_SELF']); ?>?id=<?php echo $requested_id; ?>">
			<table align="center">
			<tr>
			<td>Server Name:</td>
			<td><input type="text" name="servername" id="servername" placeholder="Input server name here...." value="<?php echo $edit_rows['servername'];?>"></td>
			</tr>
			<tr>
			<td>IP address</td>
			<td><input type="text" name="ipaddress" id="ipaddress" class="form-control" value="<?php echo $edit_rows['ipaddress'];?>"></td>
			</tr>
			<tr>
			<td>MAC address</td>
			<td><input type="text" name="macaddress" id="macaddress" value="<?php echo $edit_rows['macaddress'];?>"></td>
			</tr>
			<tr>
			<td>OS</td>
			<td><input type="text" name="os" id="os" value="<?php echo $edit_rows['os'];?>"></td>
			</tr>
			<tr>
			<td>License Key</td>
			<td><input type="text" name="licensekey" id="licensekey" value="<?php echo $edit_rows['licensekey'];?>"></td>
			</tr>
			<tr>
			<td>SQL Data (Yes/No) </td>
			<td><input type="text" name="sqldata" id="sqldata" value="<?php echo $edit_rows['sqldata'];?>"></td>
			</tr><tr>
			<td>SQL Version</td>
			<td><input type="text" name="sqlversion" id="sqlversion" value="<?php echo $edit_rows['sqlversion'];?>"></td>
			</tr><tr>
			<td>SQL License Key</td>
			<td><input type="text" name="sqllicensekey" id="sqllicensekey" value="<?php echo $edit_rows['sqllicensekey'];?>"></td>
			</tr><tr>
			<td>List of Application Installed</td>
			<td><select size="5"  name="lstBox" id="lstBox" multiple>
			<option value="A">A</option>
			<option value="D">D</option>
			<option value="C">C</option>
			<option value="E">E</option>
			<option value="B">B</option>
			</select>
			<input name="add" type="button" value="Add" onclick="FirstListBox();" /> 
			<input name="remove" type="button" value="Remove" onclick="SecondListBox();"/>
			<select size="5" name="loai" id="loai" value="<?php echo $edit_rows['loai'];?>" multiple>
			</select></td>
			</tr><tr>
			<td>List of Connected Hardware</td>
			<td><input type="text" name="loch" id="loch" value="<?php echo $edit_rows['loch'];?>"></td>
			</tr><tr>
			<td>Antivirus (Yes/No)</td>
			<td>
			<input type="text" name="antivirus" id="antivirus" value="<?php echo $edit_rows['antivirus'];?>">
			</td>
			</tr><tr>
			<td>Antivirus Validity</td>
			<td><input type="text" name="antivirusvalidity" id="antivirusvalidity" value="<?php echo $edit_rows['antivirusvalidity'];?>"></td>
			</tr><tr>
			<td>Remarks</td>
			<td><textarea rows="4" cols="50" name="remarks" value="<?php echo $edit_rows['remarks'];?>"></textarea></td>
			</tr><tr><td></td>
			<td>
				<input type="submit" name="edit" value="Update">
				<input type="hidden" name="id" value="" value="<?php echo $edit_rows['id'];?>">
			</td>
			</tr>
		</table>
		</form>
		<div class="separator"></div>
	</div>
</div>
</body>
</html>