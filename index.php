<!doctype html>
<html>
<head>
  <title>Watching the reddit flow</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/flow.js"></script>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
<h1>Reddit flow<img src="redditguy.jpg"></h1>
</div>
<div id="page">
	<div id="content">
	<!--Dynamic content goes here, list shown is a place holder-->
		<?php
		print "<ul type=none>";
		for($no = 1; $no < 25; $no++){
		print "<li>";
		print "<a href='#'>Reddit link</a>";
		print "</li>";
		}
		print "</ul>";
		?>
	</div>
</div>
<div id="footer">
Created by <a href="http://www.rossmasters.com/">Ross Masters</a> and <a href="http://www.phalt.co.uk">Paul Hallett</a>
</div>
</body>
</html>