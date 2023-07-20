<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Приют для животных "Четыре лапы"</title>
	<link rel="icon" type="image/x-icon" href="./favicon_io/favicon.ico">
	<link rel="stylesheet" type="text/css" href="pets.css">
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
		<a href="auth.php"><img src="./images/enter.png" class="authorization"></a>
		<a href="https://instagram.com"><img src="./images/inst.png" class="icon-A"></a>
		<a href="https://vk.com"><img src="./images/mask1.png" class="icon-B"></a>
		<a href="https://telegram.org"><img src="./images/mask2.png" class="icon-C"></a>
	</div>
</header>
<body>
	<form action="#" method="POST" target="_blank">
		<h2 class="form">Пробная форма</h2>
		<fieldset>
			<legend class="data">Персональные данные</legend>
			<ul>
				<li>
					<label for="name">Имя:*</label>
					<input type="text" name="name" placeholder="Иван" id="name" required>
				</li>
				<li>
					<label for="surname">Фамилия:*</label>
					<input type="text" name="surname" placeholder="Иванов" id="surname" required>
				</li>
				<li>
					<label for="age">Возраст:</label>
					<input type="number" name="age" placeholder="27" id="age" min="0" max="110">
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<legend>Контакты</legend>
			<ul>
				<li>
					<label for="email">E-mail:*</label>
					<input type="email" name="mail" placeholder="ivanov@gmail.com" id="email" required>
				</li>
				<li>
          			<label for="number">Телефон:*</label>
         			 <input type="tel" name="phone" placeholder="+7 000 000-00-00" id="number" maxlength="21" required>
        		</li>
			</ul>
		</fieldset>
	</form>
	<form>
		<div>
      		<a href="complete-query.php"><button type="submit" class="send">Отправить</button></a>
      		<p>* — Обязательные поля</p>
    	</div>
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