<?php
    include_once 'PomocnikBD.php';

    class UserManager {
        private $name;
        private $pass;
        private $log;
        function __construct($name,$pass) {
            $this->name=$name;
            $this->pass=$pass;
        }
        function getName() {
            return $this->name;
        }

        function getPass() {
            return $this->pass;
        }

        function getLog() {
            return $this->log;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setPass($pass) {
            $this->pass = $pass;
        }

        function setLog($log) {
            $this->log = $log;
        }

               static function login_form(){
                   if(isset($_SESSION['userOK'])){             
                       echo "<div class='container'><div class='row'><h4>Jesteś juz zalogowany jako administrator </h4></div></div>";
                       echo "<div class='container'><div class='row'><h6><a href='panel.php'>Przejdź do panelu</a></h6></div></div>";
                   }
                   else {
                       
                   
?>
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
               <?php }}
        function login($name,$password,$db,$table){
            $userId = $db->selectUser($name, $password, $table);
            if($userId > 0){
                $user = new UserManager($name,$password);
                $user->log = true;
                echo $user->getName().$user->getPass();
                $_SESSION['userOK'] = serialize($user);
            }
            else {$user =null;}
            return $user;
        }
        function logout(){
            $this->log=false;
            $_SESSION=array();
            if (filter_input( INPUT_COOKIE,session_name() )) {
                setcookie(session_name(), '', time() - 42000, '/');
            }
            session_destroy();
        }
    }