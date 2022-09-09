<?php

    session_start();

    $connection = mysqli_connect("localhost", "root", "", "forum");
    $username_user = htmlspecialchars($_POST['username']);
    $password_user = htmlspecialchars($_POST['password']);
    $query = "SELECT count(*) FROM users WHERE Login = '$username_user' AND haslo = '$password_user'";
    $password = mysqli_query($connection, $query);
    $row=mysqli_fetch_array($password);
    $count=$row[0];

    $query2 = "SELECT Nick FROM users WHERE Login = '$username_user' AND Haslo = '$password_user'";
    $nick = mysqli_query($connection, $query2);

    if($count>0){
        $_SESSION['user'] = $username_user;
        while($row2 = mysqli_fetch_array($nick)){
            $_SESSION['nick'] = $row2['Nick'];
        }
    }
    else{
        $_SESSION['fail_login'] = "Błędny login i/lub hasło";
    }

    header('Location: index.php');

?>