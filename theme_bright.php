<?php
    session_start();
    $_SESSION["theme"] = "bright";
    header('Location: index.php');
?>