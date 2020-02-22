<?php

session_start();

if (!isset($_SESSION['auth'])) {
    if ($_COOKIE['login'] == 'admin' && $_COOKIE['pass'] == md5('qwerty')) {
        $_SESSION['auth'] = true;
    } else {
        header('location: auth.php');
        exit();
    }
}
if(count($_POST) > 0){

    $name = $_GET['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

// проверка, что поля не пустые
    if ($title == '' ||  $content == '' ){
        $error = 'Все поля должны быть заполнены!';
    }
// проверка, поменялось ли название файла
    elseif($title != $name){

        //проверки, что название состоит из цифр и уникально
        if (!ctype_digit($title)){
            $error = 'Название должно содержать только цифры!';
        }

        elseif (file_exists("data/$title") ){
            $error = 'Такое название уже есть!';
        }
        // переименовываем файл и сохраняем контент
        else{
            rename("data/$name","data/$title");
            file_put_contents("data/$title", $content);
            header ("Location: index.php");
            exit();
        }
    }
    // если название не поменялось, сразу сохраняем контент
    else{

        file_put_contents("data/$title", $content);
        header ("Location: index.php");
        exit();
    }

    //Выводии ошибку
    echo "<p>$error</p>";

}

else{
    $fname = $_GET['f'];
    $title = $fname;
    $content = file_get_contents("data/$fname");
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
    <input type="text" name="title"><br>
    Content file<br>
    <textarea name="content"></textarea><br><br>
    <input type="submit" value="Save"><br>
</form>
<hr>
<a href="post.php">post</a><br>

</body>
</html>