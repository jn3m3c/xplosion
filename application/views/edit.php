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
	
</head>
<body>

    <div class="container">
    	<h2 class="form-signin-heading">Admin Panel</h2>
    	
    	<div class="example">
			<h2 class="example_head">Contacts</h2>
			<div class="example_result notranslate">
				<table class="table table-hover">
					<thead>
					<tr>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>Comments</th>
					</tr>
					</thead>
					<tbody>
					<? foreach($contacts as $contact): ?>
					<tr>
					  <td><?=$contact['name'] ?></td>
					  <td><?=$contact['email'] ?></td>
					  <td><?=$contact['phone'] ?></td>
					  <td><?=$contact['comments'] ?></td>
					</tr>
					<? endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>