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

		<h2>Onkunde</h2>

		<div id="mainForm">
			<ul id="formlabels">
				<li>Wat zou je graag willen kunnen?</li>
				<li>Met welke persoon kun je goed opschieten?</li>
				<li>Wat is je favoriete getal?</li>
				<li>Wat heb je altijd bij je als je op vakantie gaat?</li>
				<li>Wat is je beste persoonlijke eigenschap?</li>
				<li>Wat is je slechtste persoonlijke eigenschap?</li>
				<li>Wat is het ergste dat je kan overkomen?</li>
			</ul>
			<form action="uitslagonkunde.php" method="post">
				<input type="text" name="kunnen">
				<input type="text" name="persoon">
				<input type="text" name="getal">
				<input type="text" name="vakantie">
				<input type="text" name="beste">
				<input type="text" name="slechtste">
				<input type="text" name="ergste">
				<input type="submit" value="Verzenden" id="verzendKnop">
			</form>
		</div>
	</div>
</div>

  <div id="bottomCentered">
    <footer><p id="Copyright"> @ Joshua van Garderen </p></footer>
  </div>

</body>
</html>
