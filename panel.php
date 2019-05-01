<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'funkcje.php';
include_once 'klasy/UserManager.php';
include_once 'klasy/PomocnikBD.php';
    session_start();
    
   if(isset($_SESSION['userOK'])){
       drukuj_menu();
        $user= unserialize($_SESSION['userOK']);
        echo "zalogowaned jako ".$user->getName();
        $db = new PomocnikBD("localhost", "root", "", "glowna");
               if(filter_input(INPUT_POST,"submit")){
                   $action=filter_input(INPUT_POST,"submit");
                   switch($action){
                       case 'login': 
                           if(($_POST['name']==$_POST['rename']) && ($_POST['password']==$_POST['repassword'])){
                                $db->insert("insert into administrator (login,password) values('".$_POST['name']."','".
                                        password_hash($_POST['password'],PASSWORD_DEFAULT)."')");
                           }
                           else {
                               echo "nie udało się zarejestrować bo nie zgadzają się hasło lub login";
                           }
                           break;
                           
               }
                    
                }
        ?><div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <h4>
                        Dodaj nowego administratora:
                    </h4>
                    <form action="panel.php" method="post">
                            <div class="form-group">
                                
                            <label for="login">Login :</label>        
                            <input type="text" id="name" name="name" class="form-control" placeholder="Login for example: admin">
                            <label for="login">Powtórz login :</label>        
                            <input type="text" id="rename" name="rename" class="form-control" placeholder="Login for example: admin">

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password for example: password ">
                            <label for="password">Powtórz Password:</label>
                            <input type="password" id="repassword" name="repassword" class="form-control" placeholder="Password for example: password ">
                            <br>
                            <button type="submit" value="login" name="submit" class="btn btn-primary btn-md">Rejestruj</button>
                        </div>        
                    </form>        
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>Inne konta administratorów to :</h4>
                    <?php
                    $nazwa = "login";
                   echo $db->selectDel("SELECT * from administrator",array('id','login')); ?>
                    
                </div>
            </div>
           </div>
         
  <?php }
   else {
      echo 'nie dostaniesz się tu w ten sposób';
   }