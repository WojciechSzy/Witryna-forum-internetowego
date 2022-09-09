<!DOCTYPE html>
<html lang="pl">
<head id="head">
<meta charset="utf-8">
<title>FORUM</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
       session_start();
    ?>

    <div class="row max-width">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <nav class="navbar sticky-top">
                <?php
                    if(empty($_SESSION['user'])):
                ?>
                <a href="registry.php">
                    <button type="button">Zarejestruj się</button>
                </a>
                <?php
                    endif;
                ?>
                <?php
                    if(!empty($_SESSION['user'])):
                ?>
                <p>
                    <?php
                        echo "Witaj, " . $_SESSION['nick'] . "!";
                    ?>
                </p>
                <a href="logout.php">
                    <button type="button">Wyloguj się</button>
                </a>
                <?php
                    elseif(!empty($_SESSION['fail_login'])):
                ?>
                <p>
                    <?php
                        echo $_SESSION['fail_login'];
                    ?>
                </p>
                <form action="login.php" method="POST" class="float-end">
                    <input type="text" name="username" placeholder="Nazwa użytkownika">
                    <input type="password" name="password" placeholder="Hasło">
                    <button type="submit">Zaloguj</button>
                </form>
                <?php
                    else:
                ?>
                <form action="login.php" method="POST" class="float-end">
                    <input type="text" name="username" placeholder="Nazwa użytkownika">
                    <input type="password" name="password" placeholder="Hasło">
                    <button type="submit">Zaloguj</button>
                </form>
                <?php
                    endif;
                ?>
            </nav>
        </div>
        <div class="col-md-1">

        </div>
    </div>
    <div class="row max-width">
        <div class="col-md-1">

        </div>
        <div class="col-md-3" id="colours">
            <?php
                if(!empty($_SESSION['theme']) && $_SESSION['theme'] == "dark"){
                    echo '<link rel="stylesheet" href="style_dark.css">';
                }
                elseif(!empty($_SESSION['theme']) && $_SESSION['theme'] == "bright"){
                    echo '';
                }
                else{

                }
            ?>
            <a href="theme_bright.php"><img src="Grafiki/slonce.png" alt="jasny motyw" id="bright"></a>
            <a href="theme_dark.php"><img src="Grafiki/ksiezyc.png" alt="ciemny motyw" id="dark"></a>
            <script src="changetheme.js"></script>
            <span id="test"></span>
        </div>
        <div class="col-md-4" id="title">
            <h1>FORUM</h1>
        </div>
        <div class="col-md-3" id="clock">
            <h5><span id="data"></span>, <span id="godzina"></span></h5>
            <script src="clock.js"></script>
        </div>
        <div class="col-md-1">

        </div>
    </div>
    <div class="row max-width">
        <div class="col-md-1">

        </div>
        <div class="col-md-3" id="list">
            <b>
                TOP 5 najpopularniejszych tematów:
            </b>
            <br>
            <?php
                $connection = mysqli_connect("localhost", "root", "", "forum");
                $query = "SELECT Tytul FROM posts ORDER BY Popularnosc DESC LIMIT 5";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($result)){
                    echo $row['Tytul'] . '<br>';
                }
            ?>
            <br>
            <br>
            <br>
            <b>
                Najnowsze 5 tematów:
            </b>
            <br>
            <?php
                $query2 = "SELECT Tytul FROM posts ORDER BY Data_utworzenia DESC LIMIT 5";
                $result2 = mysqli_query($connection, $query2);
                while($row2 = mysqli_fetch_array($result2)){
                    echo $row2['Tytul'] . '<br>';
                }
            ?>
        </div>
        <div class="col-md-4 align-center" id="main">
            <?php
                $query3 = "SELECT ID, Autor, Data_utworzenia, Godzina, Tytul, Tresc FROM posts ORDER BY ID DESC";
                $result3 = mysqli_query($connection, $query3);
                while($row3 = mysqli_fetch_array($result3)){
                    echo '<p>';
                    echo '<span>';
                    echo $row3['Autor'];
                    echo '</span>';
                    echo '<span class="float-end">';
                    echo $row3['Data_utworzenia'] . ',&nbsp' . $row3['Godzina'];
                    echo '</span>';
                    echo '</p>';
                    echo '<p class="align-center" style="font-weight: bold;">';
                    echo $row3['Tytul'];
                    echo '</p>';
                    echo '<p>';
                    echo $row3['Tresc'];
                    echo '</p>';
                    echo '<form action="add_fame.php" method="POST">
                            <input type="text" name="ID" hidden value="' . $row3['ID'] . '">
                            <button type="submit"><b>+</b>Fajne</button>
                            </form>';
                    echo '<br>';
                }
            ?>
        </div>
        <div class="col-md-3 align-center" id="search">
            <form action="search.php" method="POST" class="padding">
                <input type="text" placeholder="Szukaj po tytule" name="title">
                <button type="submit">Szukaj</button>
            </form>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner padding">
                    <div class="carousel-item active" data-bs-interval="15000">
                        <img src="Grafiki/elektronika.jpg" class="h-50" alt="elektronika">
                    </div>
                    <div class="carousel-item" data-bs-interval="15000">
                        <img src="Grafiki/foto.jpg" class="h-50" alt="fotografia">
                    </div>
                    <div class="carousel-item" data-bs-interval="15000">
                        <img src="Grafiki/sport.jpg" class="h-50" alt="motorsport">
                    </div>
                </div>
            </div>
            
            <?php
                if(!empty($_SESSION['user'])):
            ?>
            <a href="new.php">
                <button type="button" class="padding"><b>+</b>Nowy temat</button>
            </a>
            <br>
            <span class="padding"></span>
            <a href="administrate.php">
                <button type="button" class="padding">Moje wpisy</button>
            </a>

            <?php
                endif;
            ?>

        </div>
        <div class="col-md-1">

        </div>
    </div>
    <div style="height: 200px">

    </div>
    <footer class="fixed-bottom">
        <div class="row max-width">
            <div class="col-md-1">

            </div>
            <div class="col-md-3">
                <a href="404.html">Regulamin</a><br>
                <a href="404.html">Polityka prywatności</a><br>
                <a href="404.html">RODO</a><br>
                <a href="404.html">Covid-19</a>
            </div>
            <div class="col-md-4">
                <a href="404.html">Spis użytkowników</a><br>
                <a href="404.html">Ustawienia konta</a><br>
                <a href="404.html">Historia forum</a><br>
                <a href="404.html">Inne usługi</a>
            </div>
            <div class="col-md-3">
                <p>Kontakt<br>
                +48 123 456 789<br>
                email@email.net<br>
                ul. Główna 22<br>
                01-234 Warszawa</p>
            </div>
            <div class="col-md-1">

            </div>
        </div>
        <div class="row max-width">
            <div class="col-md-12" id="copywrights">
                &copy; Wojciech Szylkiewicz
            </div>
        </div>
    </footer>
    
</body>
</html>