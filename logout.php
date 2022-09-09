<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['nick']);
    unset($_SESSION['fail_login']);
    unset($_SESSION['new']);
    unset($_SESSION['fail_new']);
    session_destroy();
    header('Location: index.php');
?>