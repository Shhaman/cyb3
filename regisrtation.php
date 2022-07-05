<html>
	<head>
		<title> Registration</title>
		<meta charset="utf-8"/>
		<style>
			input{
				width:200px;
				margin:5px;
			}
            #autor{
               text-align: right; 
            }
		</style>
		
	</head>
 
	<body>
		<a href="index1.html">Домашняя страница<a/>
        <h1>Регистрация нового пользователя</h1>
	
		<form action="сheck_registration.php" method="POST"/>
		<form>
        <p>Ваше имя:</p>
        <input type="text" name="UserName"/>
        <p>Ваш Email:</p>
		<input type="email" name="Email">
        <p>Ваш логин:</p>
        <input type="text" name="UserLogin"/>
        <p>Ваш пароль:</p>
		<input type="password" name="UserPwd"/><br/>
		<input type="submit" value="Зарегистрироваться!"/>
		<form/>
        <p id="autor">Автор: Фаизов Самат</p>
	</body>
 
<html>