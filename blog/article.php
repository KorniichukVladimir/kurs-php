<?php
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>news</title>
</head>
<body>

<?php
$name = $_GET['id'];
$path = "data/$name";

// file_exists -- Проверить наличие указанного файла или каталога
if ($name != '' && file_exists($path) && is_file($path)) {
    $text = file_get_contents($path);
    echo "<h1>$name</h1>";
    echo "<div>$text</div>";
} else {
    echo '
			<h1>404</h1>
			<hr>
			<a href="post.php">post</a><br>
				';
}
?>
<hr>
<a href="post.php">post</a><br>
<a href="add.php">add</a><br>
<a href="edit.php?id=<?= $name; ?>">edit</a>
<a href="auth.php">Exit</a>

</body>
</html>