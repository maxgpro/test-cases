<?php

function test($x) {
    echo "<pre>";
    var_dump($x);
    echo "<\pre>";
}

const READ_ALL = 'SELECT * FROM sort ORDER BY sort';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=stocrm', 'root', '');
} catch (PDOException $e) { echo "Ошибка выполнения запроса: " . $e->getMessage(); }

$stmt = $pdo->query(READ_ALL);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo($data[0]);


function shift($data, $x, $y) {
    for ($i = 0; $i < $y; $i++) {
        echo($data[$x]["ID"]);
        echo($data[$y]["ID"]);
    }
}
shift($data, 1, 3)
?>
