<meta charset="UTF-8">
<?php
if (isset($_POST['submit_btn'])) {

$title = $_POST[title];
$content = $_POST[content];
$dt = $_POST[data];
$key = $_POST[key];

require_once 'pdoconfig.php';
if ($key == 456) {
    try {   
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
    // Собираем данные для запроса
    $data = array( 'title' => $title, 'data' => $dt, 'content' => $content ); 
    // Подготавливаем SQL-запрос
    $query = $db->prepare("INSERT INTO $db_table (title, data, content) VALUES (:title, :data, :content)");
    // Выполняем запрос с данными
$query->execute($data);

$result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
        echo "Информация занесена в базу данных";
        echo "<br>";
        echo "<a href='addnews.php'>Вернуться</a>";
    }
} else {
    echo 'Ошибка(';
}
}
?>