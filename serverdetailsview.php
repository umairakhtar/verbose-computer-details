<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<?php
require_once("db/config.php");
$conn = mysql_connect($server, $username, $password);

mysql_select_db("computerdetails") or die(mysql_error());

$queryData = mysql_query("SELECT * FROM serverdetailsform") or die(mysql_error());

if (isset($_GET['delete'])) {
	$multiple = $_GET['multiple'];
	$i = 0;
	$sql = "DELETE FROM serverdetailsform ";
	foreach ($multiple as $item_id) { $i ++;
		if ($i == 1){
		$sql .= "WHERE id = ". mysql_real_escape_string($item_id) . "";
	} else {
		$sql .= "OR id =". mysql_real_escape_string($item_id) . "";
	}
	}
	mysql_query($sql) or die(mysql_error());
	header("location: " . $_SERVER['PHP_SELF']);
	exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	
	body {
		font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.6;
			text-align: center;
		
			}
	#wrapper {
		margin: 0;
		width: 650px;
		}
		table, th, td {
			border:1px solid #699;
		}
		td {
			padding: 10px;
			}
		thead {
			background: #D2E6EA;
			}
	</style>
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
<br><br><br><br><br><br><br><br><br><br>
<div id="wrapper">
<?php if (mysql_num_rows($queryData) > 0): ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"> 
		<table width="100%">
			<thead>
			<tr>
				<td>
					<div><input type="submit" name="delete" value="Delete"></div>
					</td>
				<td>Server Name</td>
				<td>Ip Address</td>
				<td>Mac Address</td>
				<td>Operating System</td>
				<td>License Key</td>
				<td>SQL Data</td>
				<td>SQL Version</td>
				<td>SQL License Key</td>
				<td>List of applications installed</td>
				<td>List of connected hardware</td>
				<td>Antivirus</td>
				<td>Antivirus Validity</td>
				<td>Remarks</td>
					<td>Edit</td>
			</tr>
			</thead>
			<tbody>
			<tr>
				<?php while ($row = mysql_fetch_assoc($queryData)) {?>
				<td>
					<input type="radio" name="multiple[]" value="<?php echo $row['id'];
						?>" checked>
				</td>
				<td><?php echo $row['servername'] ?></td>
				<td><?php echo $row['ipaddress'] ?></td>
				<td><?php echo $row['macaddress'] ?></td>
				<td><?php echo $row['os'] ?></td>
				<td><?php echo $row['licensekey'] ?></td>
				<td><?php echo $row['sqldata'] ?></td>
				<td><?php echo $row['sqlversion'] ?></td>
				<td><?php echo $row['sqllicensekey'] ?></td>
				<td><?php echo $row['loai'] ?></td>
				<td><?php echo $row['loch'] ?></td>
				<td><?php echo $row['antivirus'] ?></td>
				<td><?php echo $row['antivirusvalidity'] ?></td>
				<td><?php echo $row['remarks'] ?></td>
				<td><a href="serverdetailsupdate.php?id=<?php echo urlencode($row['id']); ?>">Edit</a>
				</td>
			</tr>
			<?php } ?>
			</tbody>
			</table>
	</form>
	<?php else: ?>
	<h2>No data to display</h2>
	<?php endif; ?>
</div>

</script>
</body>
</html>	