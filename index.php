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
	<a href=".php">Registration</a>
    <a href=".php">Calender</a>
    <a href="sponsors.php">Sponsors</a>
	<a href=".php">FAQ</a>
	<a href=".php">Concussion information</a>
	<a href=".php">Equipment</a>
	<a href=".php">Soccer Camp</a>
</div>

<div class="content">
	<h1>Welcome to Inverness Soccer Club</h1>
	<h2>Updates!</h2>
<?php

$endOfUpdate = "EOU";
$myfile = fopen("txt/updates.txt", "r") or die("<h3>There are no updates!</h3>");

$line =  fgets($myfile);
$out = '<div class="grid-container"><div class="top"><b>'. $line.'</b></div><div class="middle">';
echo $out;

while(!feof($myfile)) {
	$line =  fgets($myfile);
	//https://www.php.net/manual/en/function.stripos.php
	if(stripos($line,"date") != 0)
	{
		$out = '</div></div><br><br><div class="grid-container"><div class="top"><b>'. $line.'</b></div><div class="middle">';
		echo $out;
	}
	else{
		echo $line;
	}
}
echo '</div></div>';
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