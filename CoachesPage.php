<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>ISC Coaches Page</title>

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
		<a href="equipment.php">Equipment</a>
		<a href="SoccerCamp.php">Soccer Camp</a>	
		<a href="https://www.cdc.gov/headsup/youthsports/training/index.html">Concussion information</a>
		
		<!--Coaches & Volunteers dropdown-->
		<div class="dropdown">
			<button class="dropbtn">Coaches & Volunteers</button>
				<div class="dropdown-content">
					<a href="CoachesPage.php">Coaches Page</a>
					<a href="VolunteerInfo.php">Volunteer Info</a>
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
		</nav>
    </header>
<!--Body-->
<div role="main" class="container">
<h1></h1>
<h2>Updates for Coaches:</h2>
<?php
$start = '<hr><br><h4>';
$end = '</h4>';

$myfile = fopen("txt/UpdatesforCoaches.txt", "r") or die("Unable to open file!");

$line =  fgets($myfile);
$out = '<h4>'.$line.$end;
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
echo '<hr>';
fclose($myfile);
?>
<br><br>
<h2>Safety Inspection Sheets</h2>

<a href="/forms/Goal_Inspection_Form_Final2012.xls">Goal Inspection Form</a> - Before each practice and game, coaches must inspect the goal to make sure they are intact.  Complete form and turn in at the end of the season.

<a href="/forms/TheABCofInvernessSoccer2015w_o_code.doc.pdf">The ABC's of Inverness Soccer</a> - The document contains information regarding the number of players on the field, good sportsmanship, rainouts, safety rules, goal set up and tear down.
</div>
</div>
</body>
</html>