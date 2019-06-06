<!DOCTYPE html>
<html>

<head>
<title>Inverness Soccer Club Sponsors</title>

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
	<button onclick="changeDiv()">Click Here To Become a Sponsor</button>
</div>
<div class="content" id="content">
	<h1>Sponsors</h1>
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

<script>
	function changeDiv()
	{
		output = "<h1>Are you interested in supporting our league by sponsoring a team?</h1>"  
		output+= "<h2>Complete the form " + '<a href="/pdf/Sponsors-letter-2017.pdf" target="_newwin">Sponsor Form 2017</a>'  +" or " + '<a href="mailto:sponsors@invernesssoccer.com">email us</a>' + ".</h2><br>" 
		output+= '<p style = "text-align:justify;">Our Club has served families in the Inverness/Palatine and surrounding areas in providing a recreational soccer league for over 20 years.'
		output+= "We provide a non-competitive playing environment, with parent volunteer coaches, that focuses on team building, sportsmanship, and teaching the fundamentals of soccer."  
		output+= "Each season, our Club serves approximately 350 families with children from Prek through 8th grades."
		output+= "Our program relies solely on registration fees from parents of the players as well as generous contributions from community sponsors."   
		output+= "Without the support of our sponsors, the cost of the program may prevent some community children from participating." 
		output+= "As a new program this year, we would like to offer a unique opportunity for your business to meet and interact with our Club families at our (in person) registration and/or team picture day."
		output+= "I ask for your consideration in becoming a Club Sponsor as detailed in the attached information.  On behalf of the Inverness Soccer Club, players and families, we thank you for any support you can provide.</p>" 

		document.getElementById('content').innerHTML=output;
	}
</script>

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