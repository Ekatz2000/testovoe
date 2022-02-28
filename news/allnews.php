<style>
   .title {
      font-size: 24px;
      font-weight: bold;
      text-align: left;
      margin-top: 20px;
   }
   .dt {
      font-weight: bold;
      font-style: italic;
      text-align: left;
   }
   .cont {
      text-align: left;
      font-size: 18px;
   }
</style>
<meta charset="UTF-8">
<?php 
   require_once 'pdoconfig.php';

    $db = new PDO("mysql:host=$db_host; dbname=$db_base", $db_user, $db_password);
    $sql = "SELECT title, data, content FROM $db_table";
    $query = $db->prepare($sql);
    $query->execute();
    $result_array = $query->fetchAll();

    foreach ($result_array as $result_row) {
        echo  '<hr>';
         echo  '<div class="title">'.$result_row['title'].'</div>';
         echo  '<br>';
         echo  '<div class="dt">'.$result_row['data'].'</div>';
         echo  '<br>';
         echo  '<div class="cont">'.$result_row['content'].'</div>';
         echo  '<br>';
    }
$db = null;
?>