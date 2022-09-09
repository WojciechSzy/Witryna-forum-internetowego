<!DOCTYPE html>
<html lang="pl">
<head id="head">
<meta charset="utf-8">
<title>FORUM - nowy wpis</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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
                <a href="index.php">
                    <button type="button">Strona główna</button>
                </a>
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
            <h1>FORUM - nowy wpis</h1>
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
        <div class="col-md-3" >

        </div>
        <div class="col-md-4 align-center">
            <?php
                if(empty($_SESSION['new'])):
            ?>
            <form action="add_post.php" method="POST" class="align-center">
                <label for="title">Tytuł:</label><br>
                <input type="text" name="title" required><br>
                <label for="content">Treść:</label><br>
                <textarea name="content" cols="50" rows="6" required></textarea><br>
                <br>
                <button type="submit">Utwórz wpis</button>
            </form>
            <br>
            <?php
                else:
            ?>
            <?php

                if(!empty($_SESSION['new'])){
                    echo $_SESSION['new'];
                    unset($_SESSION['new']);
                }
                else{
                    echo $_SESSION['fail_new'];
                    unset($_SESSION['fail_new']);
                }

            ?>
            <?php
                endif;
            ?>
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-1">

        </div>
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