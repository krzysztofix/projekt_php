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
            ?>
        </header>
        <main>
            <div class ='container'>
                <div class='row'>
                    <div class ='col-sm-6 col-md-4'>
                        Nazywam się Krzysztof Litman jestem ....////ilka słów o mnie
                    </div>
                    <div class='col-sm-6 col-md-4'>
                        Moje zainteresowania
                    </div>
                    <div class='col-sm-12 col-md-4'>
                        Ulubione technologie
                    </div>
                    <div class='col-sm-12 col-md-6'>
                        ulubione technologie
                    </div>
                    <div class='col-sm-12 col-md-6'>
                        Kontakt         
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <a href="zaloguj.php">Panel aministratora</a>
        </footer>
        
     
        	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>
