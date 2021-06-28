<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Measurement Conversion</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<style>
	/*general*/

html{
	height: 100%;
	width: 100%;
	margin: 0;
	padding: 0;
}

body{
	height: 100%;
	width: 100%;
	padding: 0;
	background:  	#afaf6a;
	font: 18px Georgia, Times, "Times New Roman", Serif;
}

#main-content{
	width: 500px;
	margin: 0 auto; padding: 20px 0;
}

h1{
	font: 30px Arial, "Helvetica Neue", Helvetica, Sans-Serif;
}

/*menu page*/

ul#measurement-types{
	list-style-type: none;
	margin: 1em 0;
	padding: 0;
}

ul#measurement-types li{
	height: auto;
	margin: 0 0 10px 0;
	padding: 0;
}

ul#measurement-types li a{
	text-decoration: none;
	color: black;
	display: block;
	background: 	#f4f425;
	padding: 16px 24px;
	width: 180px;
	border: 1px solid black;
}

ul#measurement-types li a:hover{
	color: black;
	background:#ffff80;
}

/*Conversion forms*/

form label{
	display: inline-block;
	width: 45px;
}

form input[type="text"]{
	width: 80px;
	font-size: 16px;
	line-height: 16px;
}

form select{
	margin: 1em 0;
	font-size: 14px;
}

form input[type="submit"]{
	font-size: 1em;
	text-decoration: none;
	color: black;
	display: block;
	background: black;
	margin: 2em 0 2em 25px;
	padding: 6px 12px;
	border: 1px solid black;
}

form input[type="submit"]:hover{
	color: black;
	background: ;
}

		</style>
	<div id="main-content">
		<h1>Measurement Conversion</h1>
		<ul id="measurement-types">
			<li><a href="length.php">Length and Distance</a></li>
			<li><a href="area.php">Area</a></li>
			<li><a href="volume.php">Volume and Capacity</a></li>
			<li><a href="mass.php">Mass and Weight</a></li>
			<li><a href="speed.php">Speed</a></li>
			<li><a href="temperature.php">Temperature</a></li>
		</ul>
	</div>
</body>
</html>