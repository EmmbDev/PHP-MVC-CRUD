<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
	<!-- <?php require('nav.php'); ?> -->
	<!-- container -->
	<div class="container">
		<?php 
		// show page header
		echo "<div class='page-header'>
			<h1>{$page_title}</h1>
			</div>";
		?>