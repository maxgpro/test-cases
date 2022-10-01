<?php

// task 1 — PHP: Вывести цифры по порядку
$arrayNumbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($arrayNumbers as $key => $value) {
    echo $value . ', ';
}
echo "<br>";


// task 2 — MySQL: Написать запрос для выборки данных из таблицы, где id = 10
$sql = 'SELECT * FROM tbl WHERE id = 10';
echo $sql;
echo "<br>";


// task 3 — PHP: Вывести ключи и значение массива
$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Ivanovo',
    'telephone' => '8 (800) 555-35-35',
];
foreach ($arrayInfo as $key => $value) {
    echo $key . ', ';
}
echo "<br>";


// task 4 — PHP: Вывести месяца года
$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь',
    ],
];
foreach ($arrayMonth as $value) {
    if($value) {
        foreach ($value as $key => $month) {
            echo $month . ', ';
        }
    }
}


// task 5 — PHP: Дана информация в json формате, надо вывести её.
$jsonData = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';

echo '<pre>';
var_dump(json_decode($jsonData, true));
echo '</pre>';


// task 6 — PHP и MySQL: Дан код, нужно ответить на вопросы аргументировав свой ответ
echo 'Запрос НЕ будет выполнен потому как данные для подключения переданы в неверной последовательности. 
Верная последовательность — host, user, password, db';
echo '<br>';
echo 'Запрос для удаления пользователей — DELETE * FROM users WHERE id > 0 AND id < 6;';


/* Task 7 — PHP и HTML: Написать форму с одним полей для вода текста и
кнопкой, по нажатию которой идёт сохранения данных из поля в файл. */
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $file = 'output.txt';
    file_put_contents($file, $text . "\n", FILE_APPEND);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max.gutin@ya.ru — Макс Гутин</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="text">Text</label>
        <input type="text" name="text" id="text">
        <button>Save</button>
    </form>
</body>
</html>