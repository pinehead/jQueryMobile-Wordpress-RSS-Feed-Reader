<html> 
	<head> 
	<title>Simple Mobile Wordpress RSS</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,height=device-height,width=device-width,user-scalable = no">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	</head>
	</head>
	

<?php

$title = $_GET['title'];
$detail = $_GET['detail'];
?>

<div data-role="page" id="detail">
	<h3><?=$title;?></h3>
	<p><?=$detail;?></p>
</div>
