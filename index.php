<?php
session_start();
require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Hotel Frifaire</title> 
<meta charset="UTF-8">
<meta name="keywords" content="php, multilingüe, multiidioma,website">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Slider Jquery</title>
</head>
<body>
<nav class="navbar navbar-light bg-faded">
<div class="nav navbar-nav">
<a class="nav-item nav-link active" href="#"><?php echo $inicio; ?> <span class="sr-only">(current)</span></a>
 
</div>
</nav>
<div><?php echo $holamundo; ?></div>
<div class="dropdown closed">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $cambiarIdioma; ?>
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
<a href="changelanguage.php?language=es">
<button class="dropdown-item" type="button"><?php echo $spanish; ?></button> 
</a>
<a href="changelanguage.php?language=en">
<button class="dropdown-item" type="button"><?php echo $english; ?></button>
</a>
<a href="changelanguage.php?language=fr">
<button class="dropdown-item" type="button"><?php echo $french; ?></button>
</a>

<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/retina.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>
<script type="text/javascript">
</script>
</head>
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
    <div class="header">
        <img src="style/images/art/logo.png" alt=""/>
        <!-- Begin Menu -->
        <div id="menu-wrapper">
            <div id="menu" class="menu">
                <ul id="tiny">
                    <li class="active"><a href="index.html">Inicio</a>
                        <ul>
                            <li><a href="post.html">Alojamientos</a></li>
                        </ul>
                    </li>
                    <li><a href="mapax.html">Mapa</a></li>
                    <li><a href="login.php">Registrate</a></li>                        
                    <li><a href="contactos.html">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!-- End Menu -->
    </div>
</div>
<!-- End Header -->
<body>
    <div id="slides">
        <ul class="slides-container">
            <li><img src="style/images/art/temuco.jpg" alt=""/></li>
            <li><img src="style/images/art/villarica.jpg" alt=""/></li>
            <li><img src="style/images/art/pucon.jpg" alt=""/></li>
            <li><img src="style/images/art/cajoin.jpg" alt=""/></li>
            <li><img src="style/images/art/nuevaimperial.jpg" alt=""/></li>
            <li><img src="style/images/art/pitrufquen.jpg" alt=""/></li>
            <li><img src="style/images/art/traiguen.jpg" alt=""/></li>
            <li><img src="style/images/art/vilcun.jpg" alt=""/></li>
            <li><img src="style/images/art/freire.jpg" alt=""/></li>
            <li><img src="style/images/art/lautaro.jpg" alt=""/></li>
            <li><img src="style/images/art/curacautin.jpg" alt=""/></li>
            <li><img src="style/images/art/cunco.jpg" alt=""/></li>

        </ul>
        
      <nav class="slides-navigation">
            <a href="#" class="next icon-chevron-thin-right"></a>
            <a href="#" class="prev icon-chevron-thin-left"></a>
      </nav>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/jquery.superslides.js"></script>

    <nav class="navbar navbar-light bg-faded">
<div class="nav navbar-nav">
<a class="nav-item nav-link active" href="#"><?php echo $inicio; ?> <span class="sr-only">(current)</span></a>
 
</div>
</div>
</div>
</body> 
</html>