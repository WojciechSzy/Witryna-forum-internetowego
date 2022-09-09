<?php
    session_start();

    $author = $_SESSION['nick'];
    $made_date = date("Y-m-d");
    $made_hour = date("H:i");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fame = 1;

    if($connection = mysqli_connect("localhost", "root", "", "forum")){
        $query = "INSERT INTO posts(ID, Autor, Data_utworzenia, Godzina, Tytul, Tresc, Popularnosc) VALUES ('','$author','$made_date','$made_hour','$title','$content','$fame')";
        if($result = mysqli_query($connection, $query)){
            $_SESSION['new'] = "Dodano!";
        }
        else{
            $_SESSION['fail_new'] = "Błąd przy dodawaniu";
        }
    }
    else{
        $_SESSION['fail_new'] = "Błąd przy połączeniu";
    }
    
    header('Location: new.php');
?>