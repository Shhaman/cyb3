<?php
session_start();
?>
<html>
	<head>
		<title> Проверка</title>
		<meta charset="utf-8"/>
		<style>
			input{
				width:300px;
				margin:5px;
			}
		</style>
		
	</head>
 
	<body>
		<a href="index1.html">Домашняя страница<a/>
		<?php
		$user = $_REQUEST["txtUser"];
		$pwd = $_REQUEST["txtPwd"];
		//echo"<h1>Привет, $user<h1/>";
		$hash = hash('sha256',$pwd);
		//Ниже допущен ряд серьеных нарушений правил безопасности
		//1. Слабый пароль
		//2. Нарушение принципа наименьших привилегий
		//3. Секрет в коде
		//4. Уязвимость для SQL Injection
		$sql="SELECT*FROM users WHERE Login=? AND PwdHash=? ";
		
		$db_server = getenv("cyb3_db_server");
		$db_user = getenv("cyb3_db_user");
		$db_pwd = trim(getenv("cyb3_db_pwd"));
		$conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");
		
		//$result = mysqli_query($conn,$sql);
		//echo $result;
		//var_dump(mysqli_num_rows($result));

		$stat = mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stat,"ss",$user,$hash);
		mysqli_stmt_execute($stat);
		$result = mysqli_stmt_get_result($stat);
		



		$num_rows = mysqli_num_rows($result);
		mysqli_close($conn);
		if ($num_rows >= 1) {
			echo "<h1>Привет, $user!<h1/>";
			$_SESSION["user"] = $user;	
		}
		else {
			echo "<h1>Неверный логин!<h1/>";
		}
		?>
		<!--<a href="calc.php">Calculator</a>-->
	</body>
	
 
<html>
