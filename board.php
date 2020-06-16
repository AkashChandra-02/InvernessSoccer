<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>ISC Board</title>

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
<h1>Executive Board</h1>
<?php

function isBlank($string) {
  return $string == "" || $string == " ";
}

$myfile = fopen("txt/ExecutiveBoard.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
	$position =  "";
	$name =  "";
	$email =  "";
	
	$position =  fgets($myfile);
	$name =  fgets($myfile);
	$email =  fgets($myfile);
		
	$out = '<div class="container"><div class="row"><div class="col">'.$position.'</div><div class="col">'.$name.'</div><div class="col"><a href=mailto:'.$email.'>'.$email.'</a></div></div></div><hr>';
	
	if(!(isBlank($position)) && !(isBlank($name)) && !(isBlank($email)))
	{
		echo $out;	
	}
}
fclose($myfile);
?>

<h1>Commissioners</h1>
<?php
$myfile = fopen("txt/Commissioners.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
	$position =  "";
	$name =  "";
	$email =  "";
	
	$position =  fgets($myfile);
	$name =  fgets($myfile);
	$email =  fgets($myfile);
		
	$out = '<div class="container"><div class="row"><div class="col">'.$position.'</div><div class="col">'.$name.'</div><div class="col"><a href=mailto:'.$email.'>'.$email.'</a></div></div></div><hr>';	
	
	if(!(isBlank($position)) && !(isBlank($name)) && !(isBlank($email)))
	{
		echo $out;	
	}
}
fclose($myfile);
?>

<h1>Inverness Soccer Club Board of Directors Responsibilities</h1>
<b>Our Board of Directors manages the organization, the activities, the schedules, rules, and all of the athletes that participate in our league.  
The Executive Board Members are elected to their positions by the members of the Inverness Soccer Club.  
The Commissioners Board Member positions are filled by appointment by the Executive Board Members.  
In depth descriptions of each position can be found below.</b><br><br>

<h3>Executive Board</h3>
<b>Co-Presidents</b><br>
The Co-Presidents are the chief executive officer of the Club.   
The Co-Presidents directs the activities of the Club and presides at all meetings of the Board of Directors.  
The Co-Presidents and executive board are also responsible for appointing members to any committees which may be required for the operation of the Club. 
The Co-Presidents makes an annual report on the activities of the Club at the annual meeting of the membership.  
The Co-Presidents is also responsible for signing all written contracts, obligations or instruments of the Club.<br><br>
<b>Secretary</b><br>
The Secretary is the Club’s recorder.   The Secretary also issues all notices required and keeps all of the Board’s meeting minutes. 
The Secretary is also responsible for ISC photo day.<br><br>
<b>Treasurer</b><br>
The Treasurer is the custodian of all of the Club’s funds.  The Treasurer issues all checks on the Club’s behalf for the signature of the necessary Board Members.  
The Treasurer is also responsible for submitting a complete accounting of the collection and use of the Club’s Funds at the annual meeting of the membership. 
The Treasurer is responsible for countersigning all documents or instruments executed by the Club.
<br><br>
<h3>Commissioners</h3>

<b>Grade Level Commissioners</b><br>
The Commissioners are approved by the Board of Directors.  
The Commissioners for the ISC Coed are responsible for the selection of coaches, team make-up, schedules, settling of minor disputes, and all technicalities of running that age group’s teams and games.  
The Commissioners are responsible for the Club’s registration of youth soccer players.<br><br>

<b>Camp Coordinator</b><br>
The Camp Coordinator is responsible for coordinating and supervising the summer soccer camp hosted by the ISC.<br><br>

<b>Sponsor Coordinator</b> <br>   
The Sponsor Coordinator is responsible for coordinating and supervising fund raising efforts on behalf of the Club.<br><br>

<b>Referee Coordinator</b> <br>    
The Referee Coordinator is responsible for the procurement and oversight of referees for home games at Reis Run for all Divisions and the scheduling of referee courses.<br><br>

<b>Uniform Coordinator</b><br>
The Uniform Coordinator is responsible for obtaining the orders for uniforms from the Commissioners, ordering uniforms and distributing them to the Commissioners upon their arrival.<br><br>

<b>Webmaster</b><br>
The Webmaster is responsible for maintaining the content on the Club’s web site.<br><br>

<b>All Members</b><br>
All Board Members have the responsible for the development of community awareness of the Club’s activities.<br><br>

</div>
</body>
</html>