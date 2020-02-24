<?php
if (!isset($_SESSION['auth'])) {
    if ($_COOKIE['login'] == 'admin' && $_COOKIE['pass'] == md5('qwerty')) {
        $_SESSION['auth'] = true;
    } else {
        $_SESSION['auth'] = false;
    }
}
?>