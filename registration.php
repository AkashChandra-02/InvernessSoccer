<!DOCTYPE html>
<html>

<head>
<title>Inverness Soccer Club</title>

<link rel="stylesheet" type="text/css" href="css/index_style.css">
<link rel="stylesheet" type="text/css" href="css/table_style.css">

</head>

<body>

<div class="topnav">
	<a href="index.php">Home</a>
	<a href="registration.php">Registration</a>
    <a href=".php">Calender</a>
    <a href="sponsors.php">Sponsors</a>
	<a href="FAQ.php">FAQ</a>
	<a href="https://www.cdc.gov/concussion/HeadsUp/Training/index.html">Concussion information</a>
	<a href=".php">Equipment</a>
	<a href=".php">Soccer Camp</a>
</div>

<div class="content">
	<h1>Welcome to Inverness Soccer Club</h1>
	
<?php
$myfile = fopen("txt/registration.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
	$line =  fgets($myfile);
	if(stripos($line,".com") != 0 || stripos($line,".org") != 0 || stripos($line,".net") != 0 || stripos($line,".php") != 0)
	{
		$out = '<a href='. $line.'>Link For Registration</a>';
		echo $out;
	}
	else
	{
		echo $line.'<br><br>';
	}
}
fclose($myfile);
?>
	
</div>

<div class="footer">
	<a href="about.php">About</a>
    <a href="board.php">ISC Board</a>
	<a href=".php">ISC Mission Statement</a>
	<a href=".php">Coaches Page</a>
	<a href=".php">Volunteer Info</a>
	<a href=".php">Officials Page</a>
	<a href=".php">ISC Code of Conduct</a>
</div>

</body>

</html>