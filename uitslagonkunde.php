<?php
$kunnen = $_POST["kunnen"];
$persoon = $_POST["persoon"];
$getal = $_POST["getal"];
$vakantie = $_POST["vakantie"];
$beste = $_POST["beste"];
$slechtste = $_POST["slechtste"];
$ergste = $_POST["ergste"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlibs: Joshua van Garderen</title>
	<meta charset="UTF-8">
	<link href="Madlibs.css" rel="stylesheet">
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

		<h2>Onkunde</h2>

		<p>
			Er zijn veel mensen die niet kunnen <?php echo $kunnen ?>. <br><br>
			Neem nou <?php echo $persoon ?>. <br><br>
			Zelfs met de hulp van een <?php echo $vakantie ?> of zelfs <?php echo $getal ?> kan <?php echo $persoon ?> niet <?php echo $kunnen ?>. <br><br>
			Dat heeft niet te maken met een gebrek aan <?php echo $beste ?>, maar met een te veel aan <?php echo $slechtste ?>. <br><br>
			Te veel <?php echo $slechtste ?> leidt tot <?php echo $ergste ?> en dat is niet goed als je wilt <?php echo $kunnen ?>. <br><br>
			Helaas voor <?php echo $persoon ?>.
		</p>

	</div>
</div>

  <div id="bottomCentered">
    <footer><p id="Copyright">© Calvin Kleijn</p></footer>
  </div>

</body>
</html>
