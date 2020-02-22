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

foreach ($news as $one) {

    //is_file — Определяет, является ли файл обычным файлом
    //file_exists -- Проверить наличие указанного файла или каталога.

    if (is_file("data/$one")) {
        echo "<a href=\"article.php?id=$one\" target=\"_blank\">$one</a><hr>";
    }
}
/*
echo "<pre>";
    print_r($one);
echo "</pre>";
*/

?>

<a href="add.php">add</a>
<a href="auth.php">Exit</a>
</body>
</html>