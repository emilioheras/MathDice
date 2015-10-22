<?php

  include "functions.php";
  include "dace.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Math Dice</title>
	<!--Las tres lineas siguentes incorporan Bootstrap al proyecto -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/myStyle.css" type="text/css" />
</head>
<body>
	
	 <!--Menú superior especial para dispositivos móviles. El menú se minimizará a un solo botón-->
	 <div  class="container">
     <nav class="navbar navbar-inverse">
        <div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#"><?php print_r($menu['title'][$language])?></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
			    <!--Inicio de los botones del menú superior-->
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"><?php print_r($menu['general'][$language])?></a></li>
              <!--Primer menú desplegable-->
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu['game'][$language])?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
          			<?php
          				escribeSubmenu ($menu, 'game', 'submenu', $language);
          		  ?> 
          		    
                </ul>
              </li>
			         <!--Segundo menú desplegable-->
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu['help'][$language])?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  
          			<?php
          				escribeSubmenu ($menu, 'help', 'submenu2', $language);
          			?> 
          			
                </ul>
              </li>
            </ul>
            <!--Botones del extremo derecho superior-->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </div>
     </nav>
     </div>
     
     <!-- Posición de los dados -->
     <?php
        dibujarDados();
     ?>
     
     <!-- Dados aleatorios -->
      <div class="container">
        <div class="row">
          <div class='col-sm-2 dice'>
          <h5>Dado aleatorio</h5>
          <img src='img/Dice-<?php echo generarNumAleatorio(); ?>.png' class='img-responsive dice'></img>
          </div>
          <div class='col-sm-2 dice'>
          <h5>Dado aleatorio</h5>
          <img src='img/Dice-<?php echo generarNumAleatorio(); ?>.png' class='img-responsive dice'></img>
          </div>
        </div>
     </div>

     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>