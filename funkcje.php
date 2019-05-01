<?php
function drukuj_menu(){ ?>
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
    <nav class="navbar navbar-dark bg-success navbar-expand-md" id="menu">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="img/jaiona.jpg" width="30" height="30" class="d-inline-block mr-1 align-bottom rounded" alt=""> krzysztof litman</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class='collapse navbar-collapse' id='mainmenu'>
                        <ul class='navbar-nav'>
                            <li class='nav-item active'>
                                <a class='nav-link' href='wyksztalcenie.php'>Wykształcenie</a>
                            </li>
                            <li class='nav-item dropdown active'>
                                <a href='projekty.php' class='nav-link dropdown-toggle' 
                                   data-toggle='dropdown' role='button' aria-expanded='false' 
                                   id='submenu' aria-haspopup='true'>Projekty</a>

                                <div class='dropdown-menu' aria-labelledby='sumbenu'>
                                    <a class ='dropdown-item' href='projekt1.php'>Projekt1</a>
                                    <a class ='dropdown-item' href='projekt2.php'>Projekt2</a>

                                </div>
                            </li>
                            <li class='nav-item active'>
                                <a class='nav-link' href='kontakt'>Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<?php } 
