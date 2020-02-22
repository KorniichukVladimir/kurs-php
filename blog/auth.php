<?php
session_start();

if (count($_POST) > 0) {
    if ($_POST['login'] == 'admin' && $_POST['pass'] == 'qwerty') {
        $_SESSION['auth'] = true;

        if (isset($_POST['remember'])) {
            setcookie('login', 'admin', time() + 3600 * 24 * 7);
            setcookie('pass', md5('qwerty'), time() + 3600 * 24 * 7);
        }

        header('Location: post.php');
        exit();
    }
} else {
    unset($_SESSION['auth']);
    setcookie('login', 'admin', time() - 1);
    setcookie('pass', 'qwerty', time() - 1);
}

?>

<form method="post">
    <label for="login">Login</label><br>
    <input type="text" name="login" id="login"><br>
    <label for="password">Password</label><br>
    <input type="password" name="pass" id="password"><br>
    <input type="checkbox" id="save" name="remember"><label for="save">Save me</label><br>
    <input type="submit" value="Send">
</form>
<a href="post.php">post</a>