<?php

session_start();

include_once "is_login.php";

if ($_SESSION['auth'] == false) {
	header ("Location: auth.php");
	exit();
}
if(count($_POST) > 0){

    $name = $_GET['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

// проверка, что поля не пустые
    if ($title == '' ||  $content == '' ) {
        $error = 'Все поля должны быть заполнены!';
    } 
	//проверки, что название состоит не из цифр и уникально
	elseif (ctype_digit($title)) {
        $error = 'Название должно содержать только цифры!';
    }
	// проверка, поменялось ли название файла
    elseif ($title != $name) {

        if (file_exists("data/$title")){
            $error = 'Такое название уже есть!';
        }
        // переименовываем файл и сохраняем контент
        else {
			unlink("data/$name");
            file_put_contents("data/$title", $content);
            header ("Location: post.php");
            exit();
        }
    }
    // если название не поменялось, сразу сохраняем контент
    else {
        file_put_contents("data/$title", $content);
        header ("Location: post.php");
        exit();
    }

    //Выводии ошибку
    echo "<p>$error</p>";
}

else{
    $name = $_GET['id'];
    $title = $name;
    $content = file_get_contents("data/$name");
    $error = '';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>edit</title>
</head>
<body>
<form method="post">
    Name file<br>
    <input type="text" name="title" value="<?= $title ?>"><br>
    Content file<br>
    <textarea name="content"><?= $content ?></textarea><br><br>
    <input type="submit" value="Save"><br>
</form>
<hr>
<a href="post.php">post</a><br>

</body>
</html>