<!DOCTYPE html>
<html>
<head>
	<title>main</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row alert alert-success">
			<div class="col "><h1>Sveiki</h1></div>
					<div class="col text-right "><?= $vardas; ?> <a class=" btn btn-light btn-sm" href="?logout=true">Logout</a></div>
		</div>
		<div class="row">
			<div class="col">
				
				<?php 
				if (isset($_COOKIE['nam'])) {
					echo "<p>Sveiki sugrįžę $namess </br>Paskutinį kartą lankėtės $lastTime</p>";
				}
				?>
			</div>
			
		</div>
	</div>
	
	
</body>
</html>