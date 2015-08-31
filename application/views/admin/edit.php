<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title ?></title>
	
    <script src="../js/jquery.min.js"></script>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/bootstrap.min.js"></script>
	<link href="../css/main.css" rel="stylesheet">
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
					  <th></th>
					</tr>
					</thead>
					<tbody>
					<? foreach($contacts as $contact): ?>
					<tr>
					  <td><?=$contact['name'] ?></td>
					  <td><?=$contact['email'] ?></td>
					  <td><?=$contact['phone'] ?></td>
					  <td><textarea><?=$contact['comments'] ?></textarea></td>
					  <td><button>Update</button></td>
					</tr>
					<? endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="example">
			<h2 class="example_head">Content</h2>
			<div class="example_result notranslate">
				<table class="table table-hover">
					<thead>
					<tr>
					  <th>Title</th>
					  <th>Content</th>
					  <th></th>
					</tr>
					</thead>
					<tbody>
					<? foreach($contents as $content): ?>
					<tr>
					  <td><?=$content['title'] ?></td>
					  <td><textarea><?=$content['content'] ?></textarea></td>
					  <td><button>Update</button></td>
					</tr>
					<? endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>