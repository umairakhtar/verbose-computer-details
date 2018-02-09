<html>
<head>
<meta charset="utf8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script>
$(function() {

				$("#loginForm").submit(function(event) {
					//alert('1');
					$.post("adminsubmit.php", $("#loginForm").serialize(), function(data) {
						//alert(data);
						$("#successmessage").html(data);

					});

					event.preventDefault();

				});

			});
			</script>
</head>
<body>
<div>

				

					<div style="clear:both"></div>
					<div>
						<form id="loginForm" method="post" action="login-action.php" >
							<table id="body" class="boxu">
								<tr><td><a id="loginButton"><span>Admin Login</span></a></td></tr>
								<tr>
									<td><label for="username">Username</label></td>
									<td><input type="text" name="username" id="username" value="" required/></td>
								</tr>
								<tr>
									<td><label for="password">Password</label></td>
									<td><input type="password" name="password" id="password" value="" required/></td>
								</tr>
								<tr><td><input type="submit" id="login" value="Login" /></td>
								<td>
<div id="successmessage" style="color:#00000; font-weight:bold;"></td>
</tr>

								
							</div>
							</table>
							
							
							
						
						</form>

					</div><!-- Login box Ends Here -->

				</div><!-- Login container Ends Here -->
</body>
</html>