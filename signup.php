<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign up | Manager</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body>
		<form action="controller.php" method="post">
			<img src="mainlogo.png" alt="mainlogo">
			<h2> Sign up <h2>
				<input type="text" placeholder="User name" name="user" required>				
				<input name="password" placeholder="&#128272; Password" required="required" type="password" id="password" />			
				<input name="password_confirm" placeholder="&#128272; confirm Password" required="required" type="password" id="password_confirm" oninput="check(this)" />
				<script language='javascript' type='text/javascript'>
	    			function check(input) {
	        			if (input.value != document.getElementById('password').value) {
	            			input.setCustomValidity('Password Must be Matching.');
	        			} else {
	            			// input is valid -- reset the error message
	            			input.setCustomValidity('');
	        			}
	    			}
				</script>				
				<input type="submit" value="Sign up" value="Login">
				<a href="login.php">I already have an account</a>
		</form>
	</body>
	</html>