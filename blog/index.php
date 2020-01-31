<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>List news</title>
	</head>
	<body>
		<?php
			$news = scandir('data');
			
			foreach($news as $one){
				if(is_file("data/$one")){
					echo "<a href=\"article.php?i=$one\">$one</a><hr>";
				}
			}
			/* 
			echo "<pre>";
			print_r($news);
			echo "</pre>"; */
		
		?>
		<a href="add.php">add news</a>		
	</body>
</html>