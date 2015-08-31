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
	
	<link href="css/lightbox.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="content row">
		<div class="col-md-4">
			<h1>X-PLOSION</h1>
			<h3>SODA FOR SUPERHEROS</h3>
			<p class="tagline">Try a healthy alternative to the current articifial drinks - your mind, body and tongue will thank you!</p>
			<p><?=$content['content'] ?></p>
			<a href="img/bottom_img.png" data-lightbox="bottom_img" data-title="X-PLOSION"><img src="img/bottom_img.png"></a>
		</div>
		<div class="col-md-4">
			<img class="center-img" src="img/img.png">
		</div>
		<div class="col-md-4">
			<div class="contact-form">	
				<? if(isset($success) && $success): ?>
					<p>Thank you for contacting us.  We will get back to you shortly.</p>
				<? else: ?>
					<?php echo form_open(); ?>
						<? if(validation_errors()): ?>
						<div class="alert alert-danger">
							<?php echo validation_errors(); ?>
				        </div>
				        <? endif; ?>
						<div class="form-group">
					    	<label for="name">NAME</label>
					    	<input name="name" type="name" class="form-control" id="name" value="<?=$this->input->post('name') ?>">
						</div>
						<div class="form-group">
					    	<label for="email">EMAIL</label>
					    	<input name="email" type="email" class="form-control" id="email" value="<?=$this->input->post('email') ?>">
						</div>
						<div class="form-group">
					    	<label for="phone">PHONE</label>
					    	<input name="phone" type="phone" class="form-control" id="phone" value="<?=$this->input->post('phone') ?>">
						</div>
						<div class="form-group">
					    	<label for="comments">COMMENTS</label>
					    	<textarea name="comments" class="form-control" rows="8" id="comment"><?=$this->input->post("comments") ?></textarea>
						</div>
						<button type="submit" class="btn btn-default submit">SUBMIT</button>
					</form>
				<? endif; ?>
			</div>
		</div>
	</div>
</div>

<footer class="footer">
	<nav class="navbar">
	    <div class="container center">
	        <ul class="nav">
	            <li class="navbar-text"><a href="#">FAQ</a></li>
	            <li class="navbar-text"><a href="#">Terms</a></li>
	            <li class="navbar-text"><a href="#">Privacy Policy</a></li>
	            <li class="navbar-text"><a href="#">Contact Us</a></li>
	        </ul>
	    </div>
	</nav>
</footer>

<script src="js/lightbox.js"></script>
</body>
</html>