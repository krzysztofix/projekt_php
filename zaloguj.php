<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php 
        include_once('funkcje.php');
    ?>      
            <?php 
                drukuj_menu();
                include_once "klasy/PomocnikBD.php";
                include_once "klasy/UserManager.php";
                $db = new PomocnikBD("localhost", "root", "", "glowna");
                //$userManager = new UserManager();
                session_start();
            ?>
        <main>
        <?php    
        
            if (filter_input(INPUT_POST, "login")) {
                $args = [
                        'name' => FILTER_SANITIZE_MAGIC_QUOTES,
                        'password' => FILTER_SANITIZE_MAGIC_QUOTES
                    ];
                $dane = filter_input_array(INPUT_POST, $args);
                //sprawdź czy użytkownik o loginie istnieje w tabeli users
                //i czy podane hasło jest poprawne
                $login =  $dane['name'];
                $password = $dane['password'];
                $userManager = new UserManager($login,$password);
                $userId=$userManager->login($login,$password,$db,'administrator'); //sprawdź parametry logowania
                if ($userId != null) {
                    header("Location: panel.php"); 
                } else {
                echo "<p>Błędna nazwa użytkownika lub hasło</p>";
                $userManager->login_form(); //Pokaż formularz logowania
                }
            } else {
                //pierwsze uruchomienie skryptu processLogin
                UserManager::login_form();
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


