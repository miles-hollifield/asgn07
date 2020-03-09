<!--	Author: Miles Hollifield
		Date:	    3/8/2020
		File:	game-character.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
  <?php
  include('inc-game-character-object.php');
  
  $character1 = new GameCharacter();
  $character2 = new GameCharacter();
  
  $character1->setPlayerName('Miles');
  $character1->setScore('100');
  
  $character2->setPlayerName('Buddy');
  $character2->setScore('20');
  
  print ("<table>
		  <tr><td>Character 1:</td><td>".$character1->setPlayerName()."</td></tr>
			<tr><td>Score:</td><td>".$character1->setScore()."</td></tr>
			<tr><td>Character 2:</td><td>".$character2->setPlayerName()."</td></tr>
			<tr><td>Score:</td><td>".$character2->setScore()."</td></tr>
			</table>");
  
  ?>
</body>
</html>
