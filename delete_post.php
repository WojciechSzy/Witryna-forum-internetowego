<?php
    session_start();

    $ID = $_POST['ID'];

    if($connection = mysqli_connect("localhost", "root", "", "forum")){
        $query = "DELETE FROM posts WHERE ID = '$ID'";
        $result = mysqli_query($connection, $query);
    }
    header('Location: administrate.php');
?>