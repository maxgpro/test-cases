<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Тестовые задания для ИНТЕРВОЛГА</title>
</head>
<body>
	<h2>Задание 1 - нинарный поиск</h2>
	<form method="post">
		<label for="array">Какого размера сгенерировать массив? </label>
		<input type="number" name="array" id="array">
		<br>
		<label for="find">Какое число нужно найти? </label>
		<input type="number" name="find" id="find">
		<br>
		<button type="submit">НАЙТИ</button>
	</form>	
	<?php
		if (isset($_POST['array'])) {
			$array = []; $item = 0;
			while ( count($array) <= $_POST['array']) {
				$item++;
				array_push($array, $item);
			}
			$low = 0;
			$high = $_POST['array'];
			$find = $_POST['find'];
			$setps = 0;
			while($low <= $high){;
				$setps++;
				$mid = ($low + $high) / 2;
				if ($find == $array[$mid]) {
					echo "Ответ: " . $array[$mid] . "; ";
					echo "Шагов: " . $setps;
					break;
				}
				if ($find > $array[$mid]) {
					$low = $mid;
				}
				if ($find < $array[$mid]) {
					$high = $mid;
				}
			}
		}
	?>
	
	<h2>Задание 2 - логика</h2>
	<p>
		Поезда отходят один за другим. Чтобы уезжать к девушке в 4 раза чаще, нужно попадать в промежуток ожидания этого поезда в 4 раза чаще, а это возможно если сам промежуток будет в 4 раза больше. Следовательно, если поезда ходят с интервалом в 15 минут, то 15/5*4=12 минут.
	</p>
	<p>
		Ответ: Вероятность попасть в интервал ожидания поезда к девушке длительностью в 12 минут в 4 раза выше чем в интервал ожидания поезда домой который составляет 3 минуты.
	</p>

	<h2>Задание 3 - что делает SQL запрос</h2>
	<p>
		<code>
			select count (*) from `users` inner join `orders` on `users.id`=`orders.id_user` where `users.age`
		</code>
		<br>
		<strong>По-русски: </strong>этот запрос возвращает количество всех пользователей, сделавших заказ и указавших в профиле свой возраст.
		<br>
		<strong>Технически: </strong> запрос последовательно сравнивает записи двух таблиц на соответствие значений в полях, и возвращает количество совпадений предварительно проверив имеется ли значение в поле age.
	</p>

</body>
</html>