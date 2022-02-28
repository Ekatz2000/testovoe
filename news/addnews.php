<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<style>
body {
    background: url(/bg.jpg) no-repeat;
   }
form {
   background: #ffffff;
   padding: 30px;
   text-align: center;
   position: relative; 
   margin-top: 5%;
   margin-left: 20%;
   width: 50%;
   border-radius: 7px;
   box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
}
form .center {
   display: inline-block;
   vertical-align: top;
   width: 50%px;
   margin: 20px;
}

label {
   display: block;
   font-size: 18px;
   text-align: center;
   margin: 15px;
}
input, textarea {
   border: 1px solid #dbdbd2;
   padding: 10px;
   font-size: 16px;
   width: 436px;
   border-radius: 7px;
}
textarea {
   height: 98px;
   margin-bottom: 32px;
   font-family: Roboto;
}
input[type="submit"] {
   width: 200px;
   float: center;
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
</style>
</head>
<body>
<form method="post" action="addnewsscript.php" autocomplete="off">
   <h1>Добавить новость </h1> 
   <div class="modal-body">
      <label for="title">Название новости:</label>
      <input class="textarea" name="title" rows="1" required></input>
      <label for="data">Дата создания:</label>
      <input name="data" rows="1" placeholder="YYYY-MM-DD" required></input>
      <label for="content">Содержание новости:</label>
      <textarea id="content" name="content" rows="20" required></textarea>
      <label for="key" style="font-weight: bold">Ключ:</label>
      <input name="key" rows="1" placeholder="xxx" required></input>
   </div>
   <div class="modal-footer">
      <input type="submit" class="btn" data-dismiss="modal" aria-hidden="true" value="Закрыть">
      <input type="submit" name="submit_btn" class="btn btn-primary" value="Добавить">
   </div>
</form>
</body>
</html>