<!doctype html>
<html lang="en">
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
    echo "<a href=\"article.php?id=$one\">$one</a><hr>";
  }
}

include_once "is_login.php";

?>

<?php if (is_auth()) : ?>
    <a href="add.php">add</a><br>
    <a href="auth.php">Exit</a><br>
<? endif; ?>
<?php if (!is_auth()) : ?>
    <a href="auth.php">In login</a>
<? endif; ?>
</body>
</html>