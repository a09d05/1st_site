<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">
	<link rel="stylesheet" type="text/css" href="registration.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<style>
		a 
		{
			text-decoration: none;
		}
</style>
<header>
	<div class="outer1">
		<a href="main.php"><img src="./images/Vector.png" class="Vector"></a>
		<a href="main.php"><img src="./images/foots.png" class="foot"></a>
		<a href="about.php" class="about A" target="_blank">о приюте</a>
		<a href="pets.php" class="about B" target="_blank">питомцы</a>
		<a href="goodAdvices.php" class="about C" target="_blank">полезные советы</a>
		<a href="contacts.php" class="about D" target="_blank">контакты</a>
		<a href="auth.php"><img src="./images/enter.png" class="auth"></a>
		<a href="https://instagram.com"><img src="./images/inst.png" class="icon-A"></a>
		<a href="https://vk.com"><img src="./images/mask1.png" class="icon-B"></a>
		<a href="https://telegram.org"><img src="./images/mask2.png" class="icon-C"></a>
	</div>
</header>
<body>
<?php
	if (isset($_POST["name"]) && isset($_POST["age"])) 
	{
		$username = $_POST["name"];
		$userage = $_POST["age"];
		try
		{
			$conn = new PDO("mysql:host=localhost;dbname=testdb", "admin", "adminadmin");
			$sql = "INSERT INTO users (name, age) VALUES ('$username', '$userage')";
			$affectedRowsNumber = $conn->exec($sql);
		}
		catch (PDOException $e)
		{
			echo "Database error: " . $e->getMessage();
		}
	}	
?>
	<form action="registration.php" name="insert_reg" method="POST" class="reg_form">
		<ul style="list-style-type: none;">
			<li>Имя</li><li class="name"><input type="text" name="name" /></li>
			<!--<li>Фамилия</li><li><input type="text" name="user_surname" /></li>-->
			<li class="age">Возраст</li><input type="text" name="age"></li>
			<!--<li>Дата рождения</li><li><input type="text" name="birth_date" /></li>
			<li>Логин</li><li><input type="text" name="user_login" /></li>
			<li>Пароль</li><li><input type="password" name="user_password" /></li> -->
			<li class="click"><input type="submit" /></li>
		</ul>
	</form>
	<?php if (isset($_POST["name"]) && isset($_POST["age"])) { ?>
		<p class="readdress">Вы успешно зарегистрировались и будете перенаправлены на главную страницу</p>
		<script>
			window.setTimeout(function() {window.location = "main.php"; }, 2000)
		</script>
	<?php } ?> 
</body>
<footer>
	<div class="contact">
		<div class="message">
			<img src="./images/sms.png" class="sms"><br />	
			<span class="email">shelter@fourpaws.com</span>
		</div>
		<div class="call">
			<img src="./images/call.png" class="call_img"><br />
			<span class="telephone">8 800 500 50 00</span><br />
			<span class="schedule">Ежедневно с 09:00 до 20:00</span><br />
			<div class="networks">
				<a href="https://instagram.com"><img src="./images/inst2.png" class="insta"></a>
				<a href="https://vk.com"><img src="./images/vk2.png" class="vk"></a>
				<a href="https://telegram.org"><img src="./images/tg2.png" class="tg"></a>
			</div>
		</div>
		<div class="locate">
			<img src="./images/location.png" class="location"><br />
			<span class="address">г. Москва, ул. Лермонтова 60,<br /><span class="addr">строение 2</span></span>
		</div>
	</div>
	<div class="end">
		<span class="company">© Четыре лапы 2022</span>
		<a href="rules.php" class="confident">Политика конфиденциальности</a>
		<span class="develop">Разработка и маркетинг WebCanape</span>
	</div>
</footer>
</html>
