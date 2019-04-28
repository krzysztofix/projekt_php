<?php
    include_once 'PomocnikBD.php';

    class UserManager {
        function login_form(){ ?>
            <div class="container">  
                        <form action="zaloguj.php" method="post">
                            <div class="form-group">
                                    <div class="col-sm-8 col-md-6">
                                        <label for="login">Login :</label>        
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Login for example: admin">
                                    </div>
                                <div class="col-sm-8 col-md-6">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password for example: password ">
                                    <br>
                                    <button type="submit" value="login" name="login" class="btn btn-primary btn-md">Log in</button>
                                </div>
                            </div>
                        </form>       
            </div>
        <?php }
        function login($db){
            $args = [
                        'name' => FILTER_SANITIZE_MAGIC_QUOTES,
                        'password' => FILTER_SANITIZE_MAGIC_QUOTES
                    ];
            $dane = filter_input_array(INPUT_POST, $args);
            //sprawdź czy użytkownik o loginie istnieje w tabeli users
            //i czy podane hasło jest poprawne
            $login =  $dane['name'];
            $password = $dane['password'];
            $userId = $db->selectUser($login, $password, "administrator");
            if ($userId >= 0) { //Poprawne dane
            //rozpocznij sesję zalogowanego użytkownika
            //usuń wszystkie wpisy historyczne dla użytkownika o $userId
            //ustaw datę - format("Y-m-d H:i:s");
            //pobierz id sesji i dodaj wpis do tabeli logged_in_users
            }
            return $userId;
        }    }