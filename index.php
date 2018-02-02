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

		<div id="mainForm">
		<ul id="formlabels">
			<li>Welk dier zou je nooit als huisdier willen hebben?</li>
			<li>Wie is de belangrijkste persoon in je leven?</li>
			<li>In welk land zou je graag willen wonen?</li>
			<li>Wat doe je als je je verveelt?</li>
			<li>Met welk speelgoed speelde je als kind het meest?</li>
			<li>Bij welke docent spijbel je het liefst?</li>
			<li>Als je €100.000 had, wat zou je dan kopen?</li>
			<li>Wat is je favoriete bezigheid?</li>
		</ul>
		<form action="uitslagpaniek.php" method="post">
			<input type="text" name="huisdier">
			<input type="text" name="persoon">
			<input type="text" name="land">
			<input type="text" name="vervelen">
			<input type="text" name="speelgoed">
			<input type="text" name="spijbel">
			<input type="text" name="honderdduizendeuro">
			<input type="text" name="bezigheid">
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
