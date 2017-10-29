<?php 
	if(isset($_POST['submit'])){
		if(empty($user) || empty($password)){
			echo "<p class='error'> user name is required </p>";			
		}
		if(empty($password)){
			echo "<p class='error'> password is required </p>";			
		}
	}
?>