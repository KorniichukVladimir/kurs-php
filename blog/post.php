<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>List news</title>
	</head>
	<body>
	
		<?php
		
	    	// scandir — Получает список файлов и каталогов, расположенных по указанному пути
			$news = scandir('data');
			
			foreach($news as $one){
				
				//is_file — Определяет, является ли файл обычным файлом
				//file_exists -- Проверить наличие указанного файла или каталога.
				//trim — Удаляет пробелы (или другие символы) из начала и конца строки
				//strip_tags — Удаляет теги HTML и PHP из строки
				
				
				if(file_exists($one)){
					$one = trim(strip_tags($one));
				} elseif(is_file("data/$one")){
					echo "<a href=\"article.php?id=$one\" target=\"_blank\">$one</a><hr>";
				}
			}
			/* 
			echo "<pre>";
				print_r($one);
			echo "</pre>"; 
			*/
			
		?>
		
		
		<hr>
		<a href="article.php">article</a><br>
		<a href="add.php">add</a>
		<hr>
	1. Отредактировать скрипт post.php, таким образом, чтобы при обращении к файлу
	article.php с непереданным или с кривым параметром f, не возникало ошибки.
	2. Отредактировать файл add.php:
	a. Поставить проверку на корректность вводимых title и content. Правила:
	i. Title – не пустой и содержит только цифры.
	ii. Content – не пустой.
	iii. Title – уникальный. Такого названия статьи ещё нет.
	b. (*) в случае выявления ошибки оставить введённые данные в полях формы.
	А на экран дополнительно к форме вывести сообщение об ошибке.
	3. (*) Нарисовать схему работу edit.php в виде алгоритма. Только нарисовать.
	Интересно, как Вы понимаете принцип работы данного файла.

	</body>
</html>