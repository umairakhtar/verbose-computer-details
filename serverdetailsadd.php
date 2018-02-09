<?php
include_once 'admin-class.php';
$admin = new itg_admin();
$admin->_authenticate();
?>
<html>
<head>
<title>The Project</title>
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
<div class="content">
<form name="computerdetails" id="computerdetails" method="post" action="serverdetailssubmit.php"

<br><br><br><br>
<h2 align="center">Server Details Form</h2>

<table align="center" id="table">

<tr>
  <td>Server name</td>
  
  <td><input type="text" name="servername" id="servername"></td>
  
  </tr>
<tr>
  <td>IP address</td>
  
  <td><input type="text" name="ipaddress" id="ipaddress" class="form-control"></td>

  </tr>
<tr>
  <td>MAC address</td>
  
  <td><input type="text" name="macaddress" id="macaddress"></td>
  
  </tr>
<tr>
  <td>OS </td>
 
  <td><input type="text" name="os" id="os"></td>
  
  </tr>
<tr>
  <td>License Key </td>
<!-- <td>
<fieldset id="licensekey" >
<input type="text" name="licensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="licensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="licensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="licensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="licensekey" id="licensekey" size="5" maxlength="5">
  </fieldset></td>-->
<td><input type="text" name="licensekey" id="licensekey"></td>
  </tr>
<tr>
  <td>SQL Data </td>

  <td><input type="radio" value="Yes" name="sqldata" id="sqldata">YES
<input type="radio" name="sqldata" value="No" id="sqldata">NO</td>
  
  </tr>
<tr>
  <td>SQL Version </td>

  <td><input type="text" name="sqlversion" id="sqlversion"></td>
  
  </tr>
 
<tr>
  <td>SQL License Key </td>

  <!--<td>
	
<fieldset id="sqllicensekey">
<input type="text" name="sqllicensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="sqllicensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="sqllicensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="sqllicensekey" id="licensekey" size="5" maxlength="5">
<input type="text" name="sqllicensekey" id="licensekey" size="5" maxlength="5"></td>
  </fieldset>-->

  <td><input type="text" name="sqllicensekey" id="sqllicensekey"></td>
  </tr>

<tr>
  <td>List of Application Installed</td>
  
  
  <!--<td><select name="loai" multiple>
	<option value="select">select</option>
	<option value="a">a</option>
	<option value="b">b</option>
	<option value="c">c</option>
	<option value="d">d</option>
	</select></td>-->
	
	<TD> <select size="5"  name="lstBox" id="lstBox" multiple>
	<option value="A">A</option>
		<option value="D">D</option>
			<option value="C">C</option>
			<option value="E">E</option>
			<option value="B">B</option>
	
	</select>

 <input name="add" type="button" value="Add" onclick="FirstListBox();" /> 
 <input name="remove" type="button" value="Remove" onclick="SecondListBox();"/>
	
	<select size="5" name="loai" id="loai" multiple>
	
	</select>
	</TD>
  </tr>
<tr>
<td>List of Connected Hardware&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
  
  <td><input type="text" name="loch" id="loch"></td>
  </tr>

<td>Antivirus</td>
 <td><input type="radio" value="yes" name="antivirus" id="antivirus ">YES
<input type="radio" value="no" name="antivirus" id="antivirus ">NO
</td>
 </tr>

<td>Antivirus Validity </td>
 <td><input type="text" name="antivirusvalidity" id="antivirusvalidity"></td>
 </tr>
<tr>
<td>Remarks</td>
<td><textarea rows="4" cols="50" name="remarks"></textarea></td></tr>
<tr>
  <td></br><input type="submit" value="Submit"></td>
</tr>
</table>



<div id="message"></div>
</div>


</body>
</html>
