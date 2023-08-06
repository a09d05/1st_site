<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Приют для животных "Четыре лапы" | Выбор питомца</title>
	<link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">
	<link rel="stylesheet" type="text/css" href="get-pets.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<style>
		a 
		{
			text-decoration: none;
		}
	</style>
</head>
<header>
	<div class="outer1">
		<a href="main.php"><img src="./images/Vector.png" class="Vector"></a>
		<a href="main.php"><img src="./images/foots.png" class="foot"></a>
		<a href="about.php" class="about A">о приюте</a>
		<a href="pets.php" class="about B">питомцы</a>
		<a href="goodAdvices.php" class="about C">полезные советы</a>
		<a href="contacts.php" class="about D">контакты</a>
		<a href="https://instagram.com"><img src="./images/inst.png" class="icon-A"></a>
		<a href="https://vk.com"><img src="./images/mask1.png" class="icon-B"></a>
		<a href="https://telegram.org"><img src="./images/mask2.png" class="icon-C"></a>
	</div>
</header>
<body>
	<?php
	if (isset($_POST['name']) && isset($_POST['email'])) 
	{
		try 
		{
			$conn = new PDO("mysql:host=localhost;dbname=sitedb", "root", "N28,rty5");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "INSERT INTO reqs (name, surname, age, email, phone, pet) VALUES (?, ?, ?, ?, ?, ?);";
			$stmt = $conn->prepare($query);
			$rowNumber = $stmt->execute(array($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['email'], $_POST['phone'], $_POST['pet']));
			echo "Все отлично";
		}
		catch (PDOException $e)
		{
			echo "DBError: " . $e->getMessage();
			echo "<br />";
			echo "<a href=\'main.php\'>Try again.</a>";
		}
		finally
		{
			$conn = null;
			$query = null;
		}
	}
	?>
	<h3>Оставить заявку</h3>
	<form method="POST" action="get-pets.php">
		<p>Name:
		<input type="text" name="name"></p>
		<p>Surname:
		<input type="text" name="surname"></p>
		<p>Age:
		<input type="number" name="age"></p>
		<p>Email:
		<input type="email" name="email"></p>
		<p>Phone number:
		<input type="number" name="phone"></p>
		<p>Pet:
		<input list="petList" type="text" name="pet" placeholder="Имя питомца">
		<datalist id="petList">
			<option value="Майло" label="Джек-рассел-терьер | Мальчик"></option>
			<option value="Герта" label="Лабрадор | Девочка"></option>
			<option value="Мартин" label="Лабрадор | Мальчик"></option>
			<option value="Чарли" label="Мопс | Мальчик"></option>
			<option value="Линда" label="Бигль | Девочка"></option>
			<option value="Зельда" label="Джек-рассел-терьер | Девочка"></option>
			<option value="Пончо" label="Золотистый ретривер | Мальчик"></option>
			<option value="Дензел" label="Бульдог | Мальчик"></option>
		</datalist>
		</p>
		<input type="submit" value="Отправить">
	</form>
</body>
<footer class="down">
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