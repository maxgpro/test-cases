<?php
// Запрос для получения последнего ID
const MAX_ID = 'SELECT ID FROM tbl ORDER BY ID DESC LIMIT 1';

// Рекурсия для чтения родительских категорий
const CATEGORIES = "
WITH RECURSIVE rcrsv (ID, PARENT_ID, NAME)
AS
(
  SELECT * FROM tbl WHERE tbl.ID = ?

  UNION ALL

  SELECT tbl.ID, tbl.PARENT_ID, tbl.NAME FROM tbl
    JOIN rcrsv ON tbl.ID = rcrsv.PARENT_ID
)
SELECT * FROM rcrsv
";

// Обозгачил основные
$max_id = '';
$cats = [];

// Подключаюсь к БД
try {
    $pdo = new PDO('mysql:host=localhost;dbname=stocrm', 'root', '');
} catch (PDOException $e) { echo "Ошибка выполнения запроса: " . $e->getMessage(); }

// Запрашиваю максимальный ID
$stmt = $pdo->query(MAX_ID);
$max_id = $stmt->fetch(PDO::FETCH_ASSOC);
$max_id = implode($max_id);

// Прохожусь по каждому ID
for ($id = 0; $id < $max_id; $id++) {
    $stmt = $pdo->prepare(CATEGORIES);
    $stmt->execute([$id]);
    $cats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Если В БД есть запись с текущим ID,
    if ($cats) {

        // ... то читаю запись
        for ( $j = array_key_last($cats); $j >= 0; $j-- ) {
            echo $cats[$j]['NAME'];

            // Добавляю разделители
            if ($j != 0) {
                echo " –> ";
            } else {
                echo "<br>";
            }
        }
    }
}

?>
