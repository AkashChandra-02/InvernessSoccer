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
<a href="/forms/Goal_Inspection_Form_Final2012.xls">Goal Inspection Form</a> - Before each practice and game, coaches must inspect the goal to make sure they are intact.  Complete form and turn in at the end of the season.<br>

<a href="/forms/TheABCofInvernessSoccer2015w_o_code.doc.pdf">The ABC's of Inverness Soccer</a> - The document contains information regarding the number of players on the field, good sportsmanship, rainouts, safety rules, goal set up and tear down.<br>

<h2>Skill Building Games and Links</h2><br>
<a href="http://www.footy4kids.co.uk/soccer_coaching_and_the_very_young_child.htm" target="new">Footy Kids coaching the very young</a><br>
<a href="http://www.ucs.mun.ca/~dgraham/manual/Pages/Very_Young/u6_games.html" target="new">UCS - coaching young kids</a><br>
<a href="/forms/soccer_skills_book.pdf" target="new">Soccer Skills Book</a><br>
<a href="/forms/Chain_Gang_soccer_game.pdf" target="new">Chain Gang Soccer Game</a><br>
<a href="/forms/Elite_soccer_BarkerPre_Season_practice.pdf" target="new">Elite Soccer Practice sample</a><br><br>

<h2>Use this simple skill to make small players feel ten feet tall!</h2>
<b>By Steve Watson, youth coach</b><br><br>

If you've got some players who are a bit on the small side, it's easy for bigger opponents to intimidate them...but not if you teach your players one simple skill:<br><br>

How to step over the ball and keep their opponent at arm's length while looking for a team-mate to pass to.<br><br>

This key soccer skill is known as the "step over and roll". Players as young as seven or eight can master it very quickly and it will give their confidence a massive boost.<br><br>

The good news is doesn't matter how big or strong an opponent is. All they have to do is put their body between the opponent and the ball, keep the opponent at arms length and control the ball with the sole of their foot while looking for someone to pass to. 
It's called the step across and roll.<br><br>

<b>How to do it</b><br>

To demonstrate this move, ask a player to pass a ball to you then follow his pass and try to take the ball back.<br>
<ul>
<li>Step over the ball to put yourself between the player and the ball.</li>
<li>The foot that's furthest from the player should be resting on top of the ball.</li>
<li>Lean back slightly. Hold one arm out for balance and to stop the incoming player getting too close to you.</li>
<li>That's the step across, now it's time for the roll.</li>
<li>As your player moves around you trying to get to the ball keep it away from them by pulling the ball around in a circle using the sole of your foot.</li>
</ul>
<b>Unopposed practice</b><br><br>

Put your players in pairs. Working in a small grid, one player passes to the other and then closes them down.<br>

The receiver shields the ball as described above. Challenge the receiving players to keep the ball for ten seconds. Then swap them over.<br><br>

<b>Small group work</b><br><br>

Now introduce a third player. This player waits for X number of seconds before moving into a position where he or she can receive a pass from the player shielding the ball.<br><br>

Encourage the third player to call for the ball and make themselves clearly visible to the player in possession. Swap roles regularly.<br><br>

<b>Large group work</b><br><br>

Finish the session with a small sided game of soccer. Praise players who demonstrate the skills you've been practicing.<br><br>

<b>Conclusion</b><br><br>

When your players learn how to keep possession by stepping over and rolling the ball with the sole of their feet, their opponents are going to have to foul them to get the ball.<br><br>

It's a great confidence booster - especially if your players are on the small side and their opponents are big!
</div>
</div>
</body>
</html>