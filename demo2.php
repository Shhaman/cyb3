<html>
	<head>
		<title>Demo PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<a href="index1.html">Домашняя страница<a/>
		<h1>Hello from PHP</h1>
		<?php
			$x = 2;
			$y = 78;
			$z = $x + $y;
			echo "<h2>Результат вычисления $x и $y равно $z</h2>";
			
			date_default_timezone_set("Europe/Moscow");
			$now = date("H:i:s");
			echo "<h3>Страница была загружена в $now </h3>";
		?>
		
		<form action="doubler.php">
		<input name="num"/>
		<button>Мы удвоим введенное число</button>
		</form>
	</body>
</html>