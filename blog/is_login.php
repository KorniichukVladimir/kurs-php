<?php
function is_auth()
{
  if (!isset($_SESSION['auth'])) {
    if ($_COOKIE['login'] == 'admin' && $_COOKIE['pass'] == md5('qwerty')) {
      $_SESSION['auth'] = true;
      return true;
    } else {
      return false;
    }
  }
  return true;
}

?>