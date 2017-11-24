<?php
    //Se llaman los archivos que se requieren para conexiones u otros.
    require('../lib/database.php');
    class Page //Se crea la clase "Page" para public
    {
        //Creamos los header
        public static function header($title)
        {
            ini_set("date.timezone", "America/El_Salvador");
            print
            ("
                <!DOCTYPE html>
                <html lang = 'es'>
                <!--Aqui inicia el Head-->
                    <head>
                        <!--La siguiente linea de codigo sirve para poner las tildes-->
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1'>
                        <title>".$title."</title>
                        <!--Se llaman los archivos CSS-->
                        <link type='text/css' rel='stylesheet' href='../css/materialize.css'>
                        <link type='text/css' rel='stylesheet' href='../css/materialize.min.css'>
                        <link type='text/css' rel='stylesheet' href='../css/sweetalert2.css'/>
                        <link type='text/css' rel='stylesheet' href='../css/main.css'>
                        <link type='text/css' rel='stylesheet' href='../css/icons.css'>
                        <script type='text/javascript' src='../js/sweetalert2.js'></script>
                        <link rel='icon' type='image/png' href='../img/logo-resumido.png' />
                    </head>
                    <body background='../img/fondo.png'>
                        <!--Loader-->
                        <div id='contenedor_carga'>
                            <div id='carga'><img class='img_carga' src='../img/loading.gif'></div>
                        </div>
                        <main>
            ");
        }

        public static function navbar($title)
        {
            print
            ("
                <div class='navbar-fixed'>
                    <nav>
                        <div class='nav-wrapper'>
                            <a href='#!' class='brand-logo'><img id='logo' src='../img/logo-blanco.png'></a>
                            <a href='#' data-target='mobile-demo' class='sidenav-trigger button-collapse'><i class='material-icons'>menu</i></a>                            
                            <ul class='right hide-on-med-and-down'>
                                <li class='"); if($title=="Index"){print("active");}print("'><a href='"); if($title=="Index"){print("#");} else if($title=="Login"){print("index.php");} else {print("../index.php");} print("' class='color-blanco'>Inicio<i class='material-icons right color-blanco'>home</i></a></li>
                                <li class='"); if($title=="Login"){print("active");}print("'><a href='"); if($title=="Login"){print("#");} else if($title=="Index"){print("login.php");} else {print("../login.php");} print("' class='color-blanco'>Login<i class='material-icons right color-blanco'>mood</i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class='sidenav' id='mobile-demo'>
                    <li class='"); if($title=="Index"){print("active");}print("'><a href='"); if($title=="Index"){print("#");} else if($title=="Login"){print("index.php");} else {print("../index.php");} print("' class='color-blanco'>Inicio<i class='material-icons left color-blanco'>home</i></a></li>
                    <li class='"); if($title=="Login"){print("active");}print("'><a href='"); if($title=="Login"){print("#");} else if($title=="Index"){print("login.php");} else {print("../login.php");} print("' class='color-blanco'>Login<i class='material-icons left color-blanco'>mood</i></a></li>
                </ul>
            ");
        }

        public static function footer($title)
        {
            print
            ("
                        </main>
                    </body>
                    <footer class='page-footer'>
                    <div class='container'>
                      <div class='row'>
                        <div class='col l6 s12'>
                          <h5 class='white-text'>Footer Content</h5>
                          <p class='grey-text text-lighten-4'>You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class='col l4 offset-l2 s12'>
                          <h5 class='white-text'>Links</h5>
                          <ul>
                            <li><a class='grey-text text-lighten-3' href='#!'>Link 1</a></li>
                            <li><a class='grey-text text-lighten-3' href='#!'>Link 2</a></li>
                            <li><a class='grey-text text-lighten-3' href='#!'>Link 3</a></li>
                            <li><a class='grey-text text-lighten-3' href='#!'>Link 4</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class='footer-copyright'>
                      <div class='container'>
                      <i class='material-icons left'>copyright</i>2017-2018 Copyright
                      <p class='grey-text text-lighten-4 right'><img id='elsalvador' src='../img/elsalvador.png'>El Salvador | The Chito's Shop <img id='logo-footer' src='../img/logo-blanco.png'></p>
                      </div>
                    </div>
                  </footer>  
                    <script src='../js/jquery-3.2.1.js'></script>
                    <script src='../js/materialize.js'></script>
                    <script src='../js/materialize.min.js'></script>
                    <script src='../js/main.js'></script>
                    <script src='../js/sweetalert2.js'></script>
                </html>
            ");
        }
    }
?>