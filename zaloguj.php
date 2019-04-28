<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php 
        include_once('funkcje.php');
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" href ="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel = "stylesheet" href ="css/main.css">  
        <title>Moja strona</title>
    </head>
    <body>
        <header>          
            <?php 
                drukuj_menu();
                include_once "klasy/PomocnikBD.php";
                include_once "klasy/UserManager.php";
                $db = new PomocnikBD("localhost", "root", "", "glowna");
                $userManager = new UserManager();
            ?>
        </header>
        <main>
        <?php    
        
            if (filter_input(INPUT_POST, "login")) {
                $userId=$userManager->login($db); //sprawdź parametry logowania
                if ($userId > 0) {
                echo "<p>Poprawne logowanie.<br />";
                echo "Zalogowany użytkownik o id=$userId <br />";
                //pokaż link wyloguj
                //lub przekieruj użytkownika na inną stronę dla zalogowanych
                echo "<a href='processLogin.php?akcja=wyloguj' >Wyloguj</a> </p>";
                } else {
                echo "<p>Błędna nazwa użytkownika lub hasło</p>";
                $userManager->login_form(); //Pokaż formularz logowania
                }
            } else {
                //pierwsze uruchomienie skryptu processLogin
                $userManager->login_form();
            }
            ?>
        </main>
        <footer>
            <a href="zaloguj.php">Panel aministratora</a>
        </footer>
        
     
        	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>


