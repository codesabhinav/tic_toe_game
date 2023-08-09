<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<!-- CSS file Included -->
	<link rel="stylesheet" type="text/css" href="ticgame.css">
	<!-- JavaScript file included -->
	<script src="newtic.js"></script>
</head>
<body>
	

	<h1>Tic Toe Game using Javascript</h1>
	<h3>Lets Play !</h3>	
	<h3>First Player Name as Abhinav</h3>
	<h3>Second Player Name as Ankit</h3>
	<div class="mb-5"></div>

	<div class="ui">
		<div class="row">
			<input type="text" class="cell" id="b1" onclick="myfun_1(); myfun();"readonly>
			<input type="text" class="cell" id="b2" onclick="myfun_2(); myfun();"readonly>
			<input type="text" class="cell" id="b3" onclick="myfun_3(); myfun();"readonly>
		</div>

		<div class="row">
			<input type="text" class="cell" id="b4" onclick="myfun_4(); myfun();"readonly>
			<input type="text" class="cell" id="b5" onclick="myfun_5(); myfun();"readonly>
			<input type="text" class="cell" id="b6" onclick="myfun_6(); myfun();"readonly>
		</div>

		<div class="row">
			<input type="text" class="cell" id="b7" onclick="myfun_7(); myfun();"readonly>
			<input type="text" class="cell" id="b8" onclick="myfun_8(); myfun();"readonly>
			<input type="text" class="cell" id="b9" onclick="myfun_9(); myfun();"readonly>
		</div>
		
	</div>
	<div class="mb-5"></div>
	<input type="button" class="btn btn-primary" value="Reset" id=btn onclick="myfun_reset()">
	<div class="mb-5"></div>
	<p id="print"></p>

	

</body>
</html>