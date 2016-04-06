<!DOCTYPE html>
<html>
<head>
	<title>jQuery Portfolio</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="header">
	<div id="menu">
		<h2>jQuery Portfolio</h2>
		<input id="search" style="float:right" type="text" placeholder="search..."/>
	</div>
</div>

<div id="overlay"></div>
<div id="frame">
	<table id="frame-table">
		<tr>
			<td id="left">
				<img src="img/left.png" alt="left"/>
			</td>
			<td id="right">
				<img src="img/right.png" alt="right"/>
			</td>
		</tr>
	</table>
	<img id="main" src="" alt=""/>
	<div id="description">
		<p></p>
	</div>
</div>
<div id="wrapper">
	<ul id="filter">
		<li class="active">all</li>
		<li>start</li>
		<li>midGame</li>
		<li>grayWorld</li>
	</ul>
	<ul id="portfolio">
		<?php include_once("list.html") ?>
	</ul>
</div>

</body>
</html>