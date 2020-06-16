<!DOCTYPE html>
<html>
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<link rel="ICON" href="favicon.ico" type="image/ico" />

<title>ISC FAQ</title>

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
<h1>ISC FAQ</h1>

<li>How do I register for soccer?</li>

<dd>Registration is only done online this year; a link can be found at  Invernesssoccer.com</dd>

<li>I am a resident of Inverness, how come I don't pay the IPD resident rate?</li>

<dd>Many of the Inverness residents pay into other park districts such as Palatine or Barrington Park District. The resident rate is for only residents whose taxes are allocated to Inverness Park District. 
Check your tax bill to see which park district is receiving payment from your taxes or visit the registration page for a list of streets that are part of Inverness Park District.</dd>

 

<li>What do I receive with my registration fee?</li>

<dd>Inverness Soccer game jersey with name on back</dd>

<dd>Socks</dd>

<dd>8 scheduled soccer games</dd>

<ul>
<li>The first game will be August 25th

Last game will be on Oct. 20th inside at Soccer City in Palatine.

We play in the rain as long as there is no lightning/thunder and the field is safe to play on.

Games can be rescheduled during weekly practice times and is at the discretion of the coaches. </li>
</ul>
 

<li>What other equipment will I need?</li>

<dd>Shin Guards</dd>

<dd>Soccer Cleats for outdoor</dd>

<dd>Extra pair of socks to wear over shin guards</dd>

<dd>Soccer Ball size depending on grade level</dd>
<dd>
<ul>
<li>PreK/K and 1st grade - size 3</li>

<li>2/3 grades and 4/5 grades - size 4</li>

<li>6/7/8 graders - size 5</li>
</ul> 
</dd>
<li>When are games held?</li>

<dd>Games are on Saturday mornings beginning at 9am with ending times varying depending on the number of teams in the level.

 

<li>Where are the soccer games?</li>

<dd>PreK/K play at Holy Family</dd>

<dd>1st grade plays at Maggie Rogers</dd>

<dd>2nd/3rd grade plays at North Park</dd>

<dd>4th/5th grade plays at South Park</dd>

<dd>6th/7th/8th grade plays at Marion Jordan School.</dd>

 

<li>When are practices?</li>

<dd>Practices are one day a week - normally at the field that you play games on</dd>

<dd>Time is set by the coaches</dd>

<dd>Monday - Friday - for one hour between the hours of 4pm and 7pm</dd>

 

<li>What is my child cannot practice on a certain day of the week?</li>

<dd>On your registration form, you can list certain days that you aren't available to practice</dd>

<dd>We try to do our best not to place you on a team that practices that day of the week.</dd>

<dd>You can always attend another team's practice if you can't make your time.  We can notify the other team's coach that you will be practicing with that team.</dd>

 

<li>How are teams formed?</li>

<dd>We have 5 levels:</dd>

<ul>
<li>PreK/K</li>

<li>1st grade</li>

<li>2nd/3rd grade</li>

<li>4th/5th grade</li>

<li>6th/7th/8th grade</li>
</ul>

<dd>Teams are coed</dd>
<dd>Teams are normally arranged by school attending and friend requests</dd>
<dd>Balance of ages and gender</dd>


<li>Can I make a request to place my child with his/her friend?</li>

<dd>Yes,  there is a spot on the registration form to request a friend.  
These requests will be considered if you register prior to teams being formed.  
Late registration friend requests may not be honored. 
We try to balance teams by age and gender.  
Some friends may be separated to make the teams more balanced.</dd>

<li>I am interested in coaching, what do I need to do to be considered as a coach?</li>

<dd>We allow two coaches per team</dd>

<dd>All of our coaches and assistant coaches must pass an online background check prior to volunteering.</dd>

<dd>Email the commissioner of your grade level through the ISC Board page</dd>

<dd>We will be having a coaches clinic night in July - coaches will pick up their team rosters, team bag and learn some soccer games/training skills.</dd>

</ol>

<br><br>
<div class="container">
<h1>Field Locations</h1>
<div class="row">
 
<?php

function isBlank($string) {
  return $string == "" || $string == " " || $string == "  ";
}

$myfile = fopen("txt/FAQ.txt", "r") or die("Unable to open file!");
$x = 1;	
while(!feof($myfile)) {
	$grade = "";
	$location = "";
	
	$grade =  fgets($myfile);
	$location =  fgets($myfile);
		
	$out = '<div class="col">'.$grade.'<br>'.$location.'</div>';
	
	if(!(isBlank($grade)) && !(isBlank($location)))
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
</body>
</html>