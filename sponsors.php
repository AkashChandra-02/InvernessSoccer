<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>ISC Sponsors</title>

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


<div class="container">
<h1>Inverness Soccer Club Sponsors</h1>
  <div class="row">

<?php

function isBlank($string) {
  return $string == "" || $string == " " || $string == "  ";
}

$myfile = fopen("txt/sponsors.txt", "r") or die("Unable to open file!");
$x = 1;	
$blank = strtolower("na");

while(!feof($myfile)) {
	$companyName =  "";
	$logo =  "";
	$link =  "";
	$phoneNumber = "";
	
	$companyName =  fgets($myfile);
	$logo =  fgets($myfile);
	$link =  fgets($myfile);
	$phoneNumber =  fgets($myfile);
	
	$out = '<div class="col">';
	
	if(!(strcmp($companyName, $blank) == 2) && strlen($companyName) > 3 && !(isBlank($companyName)))
	{
		$out = $out.$companyName.'<br>';
	}
	
	if(!(strcmp($logo, $blank) == 2) && strlen($logo) > 3 && !(isBlank($logo)))
	{
		$out = $out.'<img src="'.$logo.'" width="300" height="200"><br>';
	}
		
	if(!(strcmp($link, $blank) == 2) && strlen($link) > 3 && !(isBlank($link)))
	{
		if(strpos($link, '@') !== FALSE)
		{
			$out = $out.'<a href="mailto:'.$link.'">'.$link.'</a><br>';
		}
		
		else
		{
			$out = $out.'<a href="'.$link.'">'.$link.'</a><br>';
		}	
	}
	
	if(!(strcmp($phoneNumber, $blank) == 0) && strlen($phoneNumber) > 2 && !(isBlank($phoneNumber)))
	{
		$out = $out.$phoneNumber.'<br>';	
	}
		
	$out = $out.'</div>';
	
	if(!(isBlank($companyName)) && !(isBlank($logo)) && !(isBlank($link)) && !(isBlank($phoneNumber)))
	{
		$x = $x + 1;		
		echo $out;
		if($x == 3 && !(feof($myfile)))
		{
			echo '<div class="w-100"><hr></div>';
			$x=1;
		}
	}
	
}
echo '<div class="w-100"><hr></div></div>';
fclose($myfile);
?>

</div>
</div>
</body>
</html>