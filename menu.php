<?php


function inicio(){

echo '<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>U.E.P "José María Carreño"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href=""> 
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #4e9d00;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>';
}

function head(){
    echo '
    <div class="page">
    <header class="section page-header">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="170px" data-xl-stick-up-offset="170px" data-xxl-stick-up-offset="170px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
        <div class="rd-navbar-aside-outer">
          <div class="rd-navbar-aside">
            <!--RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!--RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!--RD Navbar Brand-->
              <div class="rd-navbar-brand">
                <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/LOGOC.jpg" alt="" width="70" height="50"/></a>
              </div>
              <div class="rd-navbar-brand">
                    <h4 style="color:#55A462 ;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;Unidad Educativa Privada "José María Carreño"</h4>
              </div>
            </div>
            <div class="rd-navbar-info rd-navbar-collapse">
              <article class="info-modern">
                <div class="info-modern-icon fa-phone"></div><a class="info-modern-link" >(0239) 212.53.90 /0414-2044900</a>
              </article>
              <p>uep_jmc@hotmail.com</p>
            </div>
          </div>
        </div>
        <div style="color: #07661a " class="rd-navbar-main-outer"   >
          <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap">
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="quienesomos.php">Quiénes Somos</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href ="#" > Académicos</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Cronogramas </a>
                                </li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Orientaciones didácticas</a>
                                </li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Procedimientos académicos </a>
                                </li>
                                 <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Coordinación académica </a>
                                </li>
                                 <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="reglamento.php">Reglamento general </a>
                                </li>
                            </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="administracion.php">Administrativos</a>
                            <ul class="rd-menu rd-navbar-dropdown">
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="pago.php">Cuentas</a>
                                </li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Coordinación Administrativa</a>
                                </li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="uniforme.php">Uniforme escolar</a>
                                </li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Procedimientos administrativos </a>
                                </li>
                            </ul>
                </li>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="http://aula.uepjmc.com.ve">Aula Virtual</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--Swiper-->';
}
function footer(){
    echo'     
     <footer class="section footer-classic">
    <div class="container">
      <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Unidad Educativa Privada "José María Carreño"</span><span>.</p>
    </div>
  </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>';
}

?>
