<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Great China Clicker</title>
		
		<style>
		body, html{
			background: #000;
			margin: 0;
			padding: 0;
			height: 100vh;
			text-align: center;
		}
		canvas {
			background: #fff;
			height: 100vh;
			image-rendering: pixelated;
			cursor: none;
			font-smooth: never;
			/*-webkit-font-smoothing : none;*/
		}
		</style>
	</head>

	<body>
		<button class="logOut" type="button" onclick="location.href='./index.php'">Log Out</button>
		<canvas id="game" width="512" height="832" style="border:1px solid #000000;"></canvas>
		
		<script src="./assets/scripts/game_renderer.js" ></script>
	</body>
</html>
