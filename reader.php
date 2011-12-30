<?php

$location = "http://query.yahooapis.com/v1/public/yql?q=";
$location .= urlencode("SELECT * FROM feed where url='http://feeds.feedburner.com/Pineheadtv'");
$location .= "&format=json";

$rss = file_get_contents($location, true);

$rss = json_decode($rss);


?>


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
	
<div data-role="page" id="home">
	<h3 style="text-align:center;">Pinehead.tv Simple Mobile Rss Site</h3>
	<ul data-role="listview">
	<?php
	foreach($rss->query->results->item as $post) {
		
		$title = $post->title;
		$img = $post->enclosure->url;
		$link = $post->link;
		$detail = $post->description;
		
	echo "<li><a href=\"detail.php?title=$title&detail=$detail\" rel=\"external\"><img src=\"$img\" /><h3>$title</h3></a></li>";
	
	}
	
	?>
	</ul>
</div>