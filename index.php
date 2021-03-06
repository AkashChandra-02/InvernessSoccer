<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>Welcome to Inverness Soccer Club!</title>


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/sticky-footer-navbar.css">
<link rel="stylesheet" type="text/css" href="css/dropdown.css">

<style>
h1, h2, h4, h3, p, a
{
	color: #000000;
	/*padding-left: 15px;
    padding-right: 15px;*/
}

hr
{
        height: 2px;
        background-color: #000000;
        border: none;
}

</style>

</head>

<body style="background-image: url('/img/soccerfield.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
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
		<a style = "position: absolute;right:0;" href="https://www.facebook.com/InvernessSoccerClub/">Visit Us On Facebook</a>
		</nav>
		
    </header>
<!--Body-->
<div role="main" class="container">
	<h2>Inverness Soccer Club Updates:</h2>
<?php
//https://www.php.net/manual/en/language.types.array.php
//https://www.php.net/manual/en/language.types.object.php

$start = '</p><hr><br><h4>';
$end = '</h4><p>';
$myfile = fopen("txt/updates.txt", "r") or die("<h3>There are no updates! Please contact the commissioner for help</h3>");

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
fclose($myfile);
echo '</p><hr></div></div>';
?>
	
</div>
</body>
</html>