<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>
		body {
   		background: url(/bg.jpg);
    	        overflow: scroll;
    	        }
		form {
   		background: #ffffff;
  	 	padding: 30px;
   		text-align: center;
   		position: relative; top: 50%;
   		margin-left: 40px;
  		 width: 90%;
   		border-radius: 7px;
   		box-shadow: -2px 5px 16px rgb(0 0 0 / 8%);
		}
      		.index, .forma {
        	background: #bc2a3e;
        	width: 30%;
        	border-radius: 7px;
        	padding: 10px;
        	}
        	.add {
        	background: #bc2a3e;
        	width: 15%;
        	border-radius: 7px;
        	padding: 10px;    
        	}
		label {
   		display: contents;
   		font-size: 18px;
   		margin: 15px;
		}
		a {
		    text-decoration: none !important;
		}
		</style>
	</head>
	<body>
		<form autocomplete="off">
		<h1 style="text-align: center; color: #bc2a3e">Новости</h1>
		<div class="add">
		    <label for="add"><a href="http://svyasi.t953727y.beget.tech/news/addnews.php" style="color: #ffffff;">Добавить новость</a></label>
	    	</div>
		<?php include 'allnews.php';
		?>
		<div style="column-count: 2; margin-top: 30px;">
			<div class="index"> 
			<label for="index"><a href="http://svyasi.t953727y.beget.tech/index.php" style="color: #ffffff;">Главная</a></label>
			</div>
		    <div class="forma">
		    <label for="forma"><a href="http://svyasi.t953727y.beget.tech/forma/index.php" style="color: #ffffff;">Обратная связь</a></label>
	    	</div> 
		</div>
		</form>
	</body>
</html>
