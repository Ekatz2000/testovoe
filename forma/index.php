<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">

<style>

body {
    background: url(/bg.jpg) no-repeat;
    overflow: scroll;
   }
form {
   background: #ffffff;
   padding: 3%;
   text-align: center;
   position: relative; 
   margin-top: 5%;
   margin-bottom: 5%;
   margin-left: 23%;
   width: 50%;
   border-radius: 7px;
   box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
}
form .center {
   display: inline-block;
   vertical-align: top;
   margin: 2%;
}

label {
   display: block;
   font-size: 18px;
   text-align: center;
   margin: 15px;
}
input {
   border: 1px solid #dbdbd2;
   padding: 2%;
   font-size: 16px;
   width: 80%;
   border-radius: 7px;
}
input[type="submit"] {
   width: 200px;
   text-align: center;
   border: none;
   background-color: #bc2a3e;
   color: #ffffff;
   text-transform: uppercase;
   margin-top: 20px;
   padding: 13px
}
input[type="submit"]:hover {
  background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0 0);
}
h1 {
  color: #bc2a3e;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  padding: 10px;
  border: 1px solid #dbdbd2;
  text-align:center;
}
</style>
</head>

<body>
<?php

 if (isset($_POST['submit_btn'])) {

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$adress = $_POST['adress'];
$bezspama = $_POST['bezspama'];

require_once 'pdoconfig.php';
    if ($bezspama==6) {  

    $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
    $db->exec("set names utf8");
    $data = array( 'name' => $name, 'phone' => $phone, 'mail' => $mail, 'adress' => $adress ); 
    $query = $db->prepare("INSERT INTO $db_table (name, phone, mail, adress) VALUES (:name, :phone, :mail, :adress)");
$query->execute($data);

} else print_r('Ошибка');
}
$db = null;
?>

<form name="bd" action="" method="post" autocomplete="off">
 
    <div class="center">
    <h1>Заполните форму (все поля  обязательны)</h1>
      <label for="name">ФИО:</label>
      <input maxlength="50" type="text" name="name" placeholder="Иванов Иван Иванович" required>
 
      <label for="phone">Телефон:</label>
      <input maxlength="12" type="tel" pattern="\+7[0-9]{10}" name="phone" placeholder="+7xxxxxxxxxx" required>

      <label for="mail">E-mail:</label>
      <input maxlength="50" type="email" name="mail" placeholder="test@test.test" required>
      
      <label for="adress">Адрес:</label>
      <input maxlength="50" type="text" name="adress" placeholder="Город, улица, дом, квартира" required>

      <label for="bezspama" style="font-weight: bold">2+2*2=:</label>
      <input name="bezspama" type="text" class="rfield" required />
   </div>
    <div class="button">
      <input type="submit" name="submit_btn" value="Сохранить"/>
   </div>

</form>
<form name="bd"  autocomplete="off">
  <h1>Полученные данные:</h1>
<?php
if (isset($_POST['submit_btn'])) {
require_once 'pdoconfig.php';
    if ($bezspama==6) {  
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
    $sql = "SELECT name, phone, mail, adress FROM $db_table";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
 
    echo "<table><tr><th>ФИО</th><th>Телефон</th><th>E-mail</th><th>Адрес</th></tr>";
    foreach ($result_array as $result_row) {
        echo '<tr>';
        echo '<td>' . $result_row['name']   . '</td>';
        echo '<td>' . $result_row['phone']    . '</td>';
        echo '<td>' . $result_row['mail'] . '</td>';
        echo '<td>' . $result_row['adress']   . '</td>';
        echo '</tr>';
    }
    echo "</table>";
    } else print_r('Ошибка');
}
$db = null;
?>
</form>
</body>
</html>
