<?php
    session_start();

    $ID = $_POST['ID'];

    if($connection = mysqli_connect("localhost", "root", "", "forum")){
        $query = "SELECT Autor, Data_utworzenia, Godzina, Tytul, Tresc, Popularnosc FROM posts WHERE ID = $ID";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($result)){
            $autor = $row['Autor'];
            $data_utworzenia = $row['Data_utworzenia'];
            $godzina = $row['Godzina'];
            $tytul = $row['Tytul'];
            $tresc = $row['Tresc'];
            $fame_old = $row['Popularnosc'];
        }
        $fame_new = $fame_old+1;
        $query2 = "UPDATE posts SET ID='$ID',Autor='$autor',Data_utworzenia='$data_utworzenia',Godzina='$godzina',Tytul='$tytul',Tresc='$tresc',Popularnosc='$fame_new' WHERE ID=$ID";
        $result2 = mysqli_query($connection, $query2);
    }
    header('Location: index.php');
?>