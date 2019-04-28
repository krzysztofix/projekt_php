<?php
function drukuj_menu(){ ?>
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
<?php } 
