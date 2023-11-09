<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
      $ModeloLogin=new Login();
      $ModeloLogin->validateSession();
      $model=new Usuario();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--indicar al navegador que utilice la versión más reciente del motor de renderizado-->
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--ajusta la escala y el ancho de la página para adaptarse mejor a diferentes dispositivos-->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"> <!--establece la escala inicial de la página y limita la escala máxima en dispositivos móviles-->
    <!-- site metas -->
    <title>salon</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--enlaza la hoja de estilos de Bootstrap para aplicar estilos predefinidos-->
  
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">  <!--enlaza la hoja de estilos de Owl Carousel, una biblioteca que permite crear carruseles interactivos en la página web-->
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css"> <!--enlaza la hoja de estilos personalizada de la página web para aplicar diseño y estilos específico-->
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css"> <!--enlaza la hoja de estilos que ajusta el diseño de la página--> 
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--enlaza la hoja de estilos de la biblioteca Font Awesome, que proporciona íconos y símbolos listos para usar en la página we-->
    
</head>
<body>
    <!-- loader  -->
    <div class="loader_bg"> <!--se utiliza para crear un fondo o contenedor para una animación de carga-->
        <div class="loader"><img src="images/loading.gif" alt="" /></div>  <!--Este código crea una animación de carga utilizando una imagen GIF-->
    </div>


    <div class="wrapper"> <!--se utiliza para agrupar y contener el contenido principal de la página web, ayudando a mantener un diseño organizado y estructurado-->
        <!-- end loader -->

        <div class="sidebar"> <!--se utiliza para crear una barra lateral en la página-->
            <!-- Sidebar  -->
            <nav id="sidebar"> <!--se utiliza para definir una sección de navegación, como una barra lateral-->

                <div id="dismiss">  <!--se utiliza para crear un elemento de cierre o botón en una barra de navegación-->
                    <i class="fa fa-arrow-left"></i> <!--se utiliza para insertar un icono de flecha hacia la izquierda-->
                </div>

                <ul class="list-unstyled components">  <!--se utiliza para crear una lista no ordenada sin estilos de viñetas en el contenido de la página -->

                    <li class="active">
                        <a href="../index.php">Home</a>  <!--crea un enlace (hipervínculo) que dirige al archivo "index.php" y muestra el texto "Home" como el texto del enlace -->
                    </li>
                    <li>
                        <a href="about.php">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="service.php">Servicios</a>
                    </li>
                  

                    <li>
                        <a href="contact.php">Registrarse/Iniciar sesion</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div id="content"> <!-- se utiliza para definir una sección de contenido principal en una página web-->
            <!-- header -->
            <header>
                <div class="container-fluid"> <!--se utiliza para crear un contenedor de ancho completo que se adapta al ancho de la ventana del navegador-->
                    <div class="row"> <!--se utiliza para crear una fila en la cuadrícula de diseño de Bootstrap. Ayuda a organizar y alinear contenido en columnas dentro de un contenedor-->
                        <div class="col-md-3"> <!--es utiliza para crear una columna dentro de una fila en la cuadrícula de diseño de Bootstrap. Permite dividir el espacio horizontal en columnas y ajustar el contenido en diferentes tamaños de pantalla-->
                            <div class="full">  <!--se utiliza para crear un contenedor que ocupa todo el ancho disponible en su contenedor padre-->
                                <a class="logo" href="../index.php"><img src="images/logo.png"  width="100" height="100" /></a>
                            </div>
                        </div>
                        <div class="col-md-9"> <!--se utiliza para crear una columna que ocupa 9 unidades de ancho en una fila en la cuadrícula de diseño de Bootstrap-->
                            <div class="full"><!--se utiliza para crear un contenedor que ocupa todo el ancho disponible en su contenedor padre-->
                                <div class="right_header_info">   <!--se utiliza para agrupar y organizar información en la parte derecha de la sección de encabezado (header) de la página web-->
                                    <ul>
                                        <li class="dinone"><img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" height="40" width="40"><a href="#">324-619-9690</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" height="40" width="40"><a href="#">ELSOL@gmail.com</a></li>

                                        
                                        <li class="button_user"> <a class="button" href="#">Agenda Ahora</a></li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <a href="#">MENU</a>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row">
                        

                       
                       
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id Usuario</th> 
                                <th>correo Usuario</th>
                                <th>estado Usuario</th>
                                <th>Rol</th>
                            <th>contraseña</th>
                            <th>editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
        $Usuario=$model->Obtener($_SESSION['idUsuario']);
        if($Usuario!=null) {
            foreach($Usuario as $r) {
        /*LA VARIABLE model ES UNA INSTANCIA DE LA CLASE USUARIO Y SU VEZ LLAMA A LA FUNCION LISTAR DE USUARIOS.PHP DE LA CARPETA MODELO*/?>
        <tr>
            <td><?php echo $r['idUsuario']; ?></td>
            <td><?php echo $r['correoUsuario']; ?></td>
            <td><?php echo  $r['estadoUsuario']; ?></td>
            <td><?php if ($r['IdRolFK'] == 1) {echo "empleado";}
                else {echo  $r['IdRolFK'] == 2 ? "cliente" : "administrador";} ?></td>
            <td><div class="form-group"><input type="password" value="<?php echo $r['passwordUsuario']; ?>" disabled="true" /></div></td>
            <td>
            <a href="actualizar_usuario.php?idUsuario=<?php echo $r['idUsuario']; ?>">editar</a><!-- INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP PASANDO EL ID COMO PARÁMETRO--->
            </td>
           
        </tr>
        <?php
        }
      }
        ?>
        </tbody>
    </table>
    <hr />
    </div>
     </div>
      <!-- footer -->
      <fooetr>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer_logo">
                                        <a class="logo" href="index.php"><img src="images/logo.png" alt="#" width="100" height="100" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="address">
                                        <h3></h3>
                                        <p>
                                            Direccion: ciudad bolivar cra 19f  # 71B 03s
                                            <br> Tel: +57 324 619 9690
                                            
                                            <br> Email: elsol@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="lik">

                                        <li> <img src="images/fb.png" alt="#" /></li>
                                        <li> <img src="images/tw.png" alt="#" /></li>
                                        <li> <img src="images/you.png" alt="#" /></li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <p><a href="https://html.design/"> </a></p>
                            </div>
                        </div>
                    </div>

                </fooetr>
                <!-- end footer -->

            </div>

            <div class="overlay"></div> <!-- se utiliza para crear un fondo semitransparente que se superpone sobre el contenido existente en la página web. Es comúnmente utilizado para crear efectos visuales o interacciones-->
            <!-- Javascript files-->
            <script src="js/jquery.min.js"></script> <!--enlaza la biblioteca jQuery al documento HTML. jQuery es una biblioteca de JavaScript que facilita la manipulación del DOM y la creación de interacciones y animaciones en la página web-->
            <script src="js/popper.min.js"></script>  <!--enlaza la biblioteca Popper al documento HTML. Popper es una biblioteca de posicionamiento de JavaScript que se usa a menudo con herramientas como Bootstrap para gestionar el posicionamiento de elementos emergentes y ventanas modales en la página web-->
            <script src="js/bootstrap.bundle.min.js"></script> <!--enlaza la biblioteca Bootstrap al documento HTML. Bootstrap es un marco de diseño que proporciona componentes y estilos predefinidos para crear interfaces web con una apariencia consistente y responsiva-->
            <script src="js/owl.carousel.min.js"></script> <!--enlaza la biblioteca Owl Carousel al documento HTML. Owl Carousel es una biblioteca de JavaScript que permite crear carruseles interactivos y deslizables-->
            <script src="js/custom.js"></script> <!--enlaza un archivo JavaScript personalizado al documento HTML. Este archivo "custom.js" contiene código personalizado que puede proporcionar funcionalidades específicas y personalizadas para la página web-->
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> <!--enlaza la biblioteca jQuery Custom Scrollbar al documento HTML. Esta biblioteca agrega estilos y funcionalidades personalizadas a las barras de desplazamiento en la página web, permitiendo una experiencia de desplazamiento mejorada y personalizable-->

            <script src="js/jquery-3.0.0.min.js"></script> <!--enlaza la biblioteca jQuery al documento HTML desde una ubicación diferente. jQuery es una biblioteca de JavaScript que simplifica la manipulación del DOM y la creación de interacciones interactivas en la página web-->
            <script type="text/javascript">  //se utiliza para delinear el inicio de un bloque de código JavaScript en el documento HTML. Permite incluir y ejecutar código JavaScript en la página web para proporcionar funcionalidades interactivas y dinámicas
                $(document).ready(function() {
                    $("#sidebar").mCustomScrollbar({
                        theme: "minimal"
                    });

                    $('#dismiss, .overlay').on('click', function() {
                        $('#sidebar').removeClass('active');
                        $('.overlay').removeClass('active');
                    });

                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').addClass('active');
                        $('.overlay').addClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
                //Este bloque de código JavaScript se utiliza para proporcionar funcionalidades interactivas en la página web, especialmente en relación con una barra de navegación lateral
            </script> 

            <style>
                #owl-demo .item {
                    margin: 3px;
                }
                
                #owl-demo .item img {
                    display: block;
                    width: 100%;
                    height: auto;
                }
            </style>

            <script>
                $(document).ready(function() {
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        margin: 10,
                        nav: true,
                        loop: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 3
                            }
                        }
                    })
                })
            </script>
</body>
</html>