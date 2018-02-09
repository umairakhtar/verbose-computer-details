<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<html>
<head>
<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
                </ul>
            </li>
            <li> <a href="#">PC details</a>
                <ul>
                    <li><a href="#">Add</a>
                    </li>
                    <li><a href="#">View</a>
                    </li>
                </ul>
            </li>
            <li> <a href="#">ITequip Details</a>
                <ul>
                    <li><a href="#">Add</a>
                    </li>
                    <li><a href="#">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- <fieldset>
            <legend>Welcome <?php echo $admin->get_username(); ?></legend>
                <p>
                    Here are some of the basic informations
                </p>
                <p>
                    Username: <?php echo $_SESSION['admin_login']; ?>
                </p>
                <p>
                    Email: 
                </p>
        </fieldset> -->
 <p>
            <input type="button" id="button" onclick="javascript:window.location.href='logout.php'" value="logout" />
        </p>
</body>
</html>