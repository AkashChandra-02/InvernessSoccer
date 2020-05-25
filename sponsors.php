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
		</nav>
    </header>
<!--Body-->
<div role="main" class="container">
<h1 style="color: #336600;">Inverness Soccer Club Sponsors</h1>
<?php
$myfile = fopen("txt/sponsors.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
	$line =  fgets($myfile);
	if(strpos($line,"@") != 0){
		$out = '<a href=mailto:'. $line.'>'.$line."</a><br>";
		echo $out;
	}
	
	else if(stripos($line,".jpg") != 0 || stripos($line,".png") != 0 || stripos($line,".gif") != 0 || stripos($line,".jpeg") != 0){
		$out = '<br><img src="' . $line . '" style="width:250px;height:200px;"><br>';
		echo $out;
	}
	
	else{
		$out = $line."<br>";
		echo $out;
	}
}
fclose($myfile);
?>

	
</div>
</body>
</html>