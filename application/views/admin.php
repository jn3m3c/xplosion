<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title ?></title>
	
    <script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>

    <div class="container">
    	<h2 class="form-signin-heading">Admin Login</h2>
		<?php echo form_open(); ?>
			<? if(isset($message)): ?>
			<div class="alert alert-danger">
				<?php echo $message; ?>
	        </div>
	        <? endif; ?>
	        
	        <label for="username" class="sr-only">Username</label>
	        <input name="username" type="text" id="username" class="form-control" placeholder="Username" required autofocus>
	        <label for="password" class="sr-only">Password</label>
	        <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		</form>
	</div>
</body>
</html>