<?php
    session_start();
    $_SESSION["theme"] = "dark";
    header('Location: index.php');
?>