<!DOCTYPE html>
<html>
<head>
<style>
h4
{
	color: #336600;
}
</style>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>Inverness Soccer Club</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/sticky-footer-navbar.css">
<link rel="stylesheet" type="text/css" href="css/dropdown.css">
</head>

<body>
<header>
<!-- navbar -->
      <nav class="navbar  navbar-expand-md fixed-top">
        
		<!--image that links back home-->
		<a class="navbar-brand" href="index.php"><img alt="Inverness Soccer Logo" src="/img/InvernessSoccerLogo.jpg"
         width=90" height="90"></a>	
		
		<a href="registration.php">Registration</a>
		<a href="calender.php">Calender</a>	
		<a href="FAQ.php">FAQ</a>
		<a href=".php">Equipment</a>
		<a href=".php">Soccer Camp</a>	
		<a href="https://www.cdc.gov/headsup/youthsports/training/index.html">Concussion information</a>
		
		<!--Coaches & Volunteers dropdown-->
		<div class="dropdown">
			<button class="dropbtn">Coaches & Volunteers</button>
				<div class="dropdown-content">
					<a href=".php">Coaches Page</a>
					<a href=".php">Volunteer Info</a>
				</div>
		</div>
		
		<!--About dropdown-->
		<div class="dropdown">
			<button class="dropbtn">About ISC</button>
				<div class="dropdown-content">
					<a href="about.php">About Page</a>
					<a href="board.php">ISC Board</a>
					<a href="sponsors.php">ISC Sponsors</a>
				</div>
		</div>
		<a style = "position: absolute;right:0;" href="https://www.facebook.com/InvernessSoccerClub/">Visit Us On Facebook</a>
		</nav>
		
    </header>
<!--Body-->
<div role="main" class="container">
	<h1>Welcome to Inverness Soccer Club!</h1>
	<h2>Updates:</h2>
<?php

$start = '<h4>';
$end = '</h4>';
$myfile = fopen("txt/updates.txt", "r") or die("<h3>There are no updates! Please contact the commissioner for help</h3>");

$line =  fgets($myfile);
$out = $start.$line.$end;
echo $out;

while(!feof($myfile)) {
	$line =  fgets($myfile);
	if(stripos($line,"date:") !== false)
	{
		$out = $start.$line.$end;
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
</body>
</html>