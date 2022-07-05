<?php
session_start();
{
	{
        echo '<meta http-equiv="refresh" content="3; url=login.php">';
        echo("Пользователь зарегистрирован. Сейчас вы будете перенаправлены на страницу входа");
    }
}
?>
<html>
	<head>
		<title> Проверка</title>
		<meta charset="utf-8"/>
		<style>
			input{
				width:200px;
				margin:5px;
			}
		</style>
		
	</head>
 
	<body>
		
		<?php
		$name = $_REQUEST["UserName"];
        $email = $_REQUEST["Email"];
        $login = $_REQUEST["UserLogin"];
		$pwd = $_REQUEST["UserPwd"];
		$hash = hash('sha256',$pwd);
        
		
		$db_server = getenv("cyb3_db_server");
		$db_user = getenv("cyb3_db_user");
		$db_pwd = trim(getenv("cyb3_db_pwd"));
		$conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");
		    
        $sql="INSERT INTO users (UserName, Email, Login, PwdHash) VALUES (?,?,?,?) ";
        $stat = mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stat,"ssss",$name, $email, $login, $hash);
		mysqli_stmt_execute($stat);

       
		?>
		
	</body>
	
 
<html>
