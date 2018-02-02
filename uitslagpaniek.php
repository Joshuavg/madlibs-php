<?php
$huisdier = $_POST["huisdier"];
$persoon = $_POST["persoon"];
$land = $_POST["land"];
$vervelen = $_POST["vervelen"];
$speelgoed = $_POST["speelgoed"];
$spijbel = $_POST["spijbel"];
$honderdduizendeuro = $_POST["honderdduizendeuro"];
$bezigheid = $_POST["bezigheid"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlibs: Joshua van Garderen</title>
	<meta charset="UTF-8">
	<link href="madlibs.css" rel="stylesheet">
</head>

<body>

<div id="main">

	<div id="topCentered">
		<h1>Madlibs</h1>
	</div>

	<div id="mainCentered">
		<nav>
			<ul id="topnav">
				<li><a href="index.php">Er heerst paniek!</a></li>
				<li><a href="onkunde.php">Onkunde</a></li>
			</ul>
		</nav>

		<h2>Er heerst paniek!</h2>

    <p>
			Er heerst paniek in het koninkrijk <?php echo $land ?>. Koning <?php echo $spijbel ?> is ten einde raad en als koning <?php echo $spijbel ?> tegen einde raad is,
			dan roept hij zijn ten-einde-raadsheer <?php echo $persoon ?>.<br><br>
		 "<?php echo $persoon ?>! Het is een schande!"<br><br>
		 "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
		 "Mijn <?php echo $huisdier ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $speelgoed ?> voor hem gekocht!"<br><br>
		 "Majesteit, uw <?php echo $huisdier ?> komt vanzelf weer terug?"<br><br>
		 "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid ?> leren?"<br><br>
		 "Maar Sire, daar kunt u toch uw <?php echo $honderdduizendeuro ?> voor gebruiken."<br><br>
		 "<?php echo $persoon ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
		 "<?php echo $vervelen ?>, Sire."
    </p>
	</div>
</div>

  <div id="bottomCentered">
    <footer><p id="Copyright">© Joshua van Garderen </p></footer>
  </div>

</body>
</html>
