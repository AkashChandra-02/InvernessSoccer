<!DOCTYPE html>
<html>

<head>
<title>Inverness Soccer Club Board</title>

<link rel="stylesheet" type="text/css" href="css/index_style.css">

</head>

<body>

<div class="topnav">
	<a href="index.php">Home</a>
	<a href=".php">Registration</a>
    <a href=".php">Calender</a>
    <a href="sponsors.php">Sponsors</a>
	<a href="FAQ.php">FAQ</a>
	<a href=".php">Concussion information</a>
	<a href=".php">Equipment</a>
	<a href=".php">Soccer Camp</a>
</div>

<div class="content">
<h1 style="text-align: center;">Executive Board</h1>
<?php
$myfile = fopen("txt/board.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
	$line =  fgets($myfile);
	//https://www.php.net/manual/en/function.stripos.php
	if(strpos($line,"@") != 0){
		$out = '<a href=mailto:'. $line.'>'.$line."</a><br><br>";
		echo $out;
	}
	else{
		echo $line;
	}
}
fclose($myfile);
?>

<h1 style="text-align: center;">Inverness Soccer Club Board of Directors Responsibilities</h1>
<b>Our Board of Directors manages the organization, the activities, the schedules, rules, and all of the athletes that participate in our league.  
The Executive Board Members are elected to their positions by the members of the Inverness Soccer Club.  
The Commissioners Board Member positions are filled by appointment by the Executive Board Members.  
In depth descriptions of each position can be found at the bottom of this page.</b><br>
<h3 style="text-align: center;">Executive Board</h3>
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
<h3 style="text-align: center;">Commissioners</h3>

<b>Commissioners</b><br>
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