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
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css"> <!--enlaza la hoja de estilos de Bootstrap para aplicar estilos predefinidos-->
  
    <!-- owl css -->
    <link rel="stylesheet" href="Vista/css/owl.carousel.min.css">  <!--enlaza la hoja de estilos de Owl Carousel, una biblioteca que permite crear carruseles interactivos en la página web-->
    <!-- style css -->
    <link rel="stylesheet" href="Vista/css/style.css"> <!--enlaza la hoja de estilos personalizada de la página web para aplicar diseño y estilos específico-->
    <!-- responsive-->
    <link rel="stylesheet" href="Vista/css/responsive.css"> <!--enlaza la hoja de estilos que ajusta el diseño de la página--> 
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--enlaza la hoja de estilos de la biblioteca Font Awesome, que proporciona íconos y símbolos listos para usar en la página we-->
    
</head>
<!-- body -->

<body>
    <!-- loader  -->
    <div class="loader_bg"> <!--se utiliza para crear un fondo o contenedor para una animación de carga-->
        <div class="loader"><img src="Vista/images/loading.gif" alt="" /></div>  <!--Este código crea una animación de carga utilizando una imagen GIF-->
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
                        <a href="index.php">Home</a>  <!--crea un enlace (hipervínculo) que dirige al archivo "index.php" y muestra el texto "Home" como el texto del enlace -->
                    </li>
                    <li>
                        <a href="Vista/about.php">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="Vista/service.php">Servicios</a>
                    </li>
                  

                    <li>
                        <a href="Vista/registrar_usuarioC.php">Registrarse/Iniciar sesion</a>
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
                                <a class="logo" href="index.html"><img src="Vista/images/logo.png"  width="100" height="100" /></a>
                            </div>
                        </div>
                        <div class="col-md-9"> <!--se utiliza para crear una columna que ocupa 9 unidades de ancho en una fila en la cuadrícula de diseño de Bootstrap-->
                            <div class="full"><!--se utiliza para crear un contenedor que ocupa todo el ancho disponible en su contenedor padre-->
                                <div class="right_header_info">   <!--se utiliza para agrupar y organizar información en la parte derecha de la sección de encabezado (header) de la página web-->
                                    <ul>
                                        <li class="dinone"><img style="margin-right: 15px;margin-left: 15px;" src="Vista/images/phone_icon.png" height="40" width="40"><a href="#">324-619-9690</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;" src="Vista/images/mail_icon.png" alt="#" height="40" width="40"><a href="#">ELSOL@gmail.com</a></li>

                                        
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
            <!-- end header -->
            <!-- start slider section -->
            <div class="slider_section banner_bg" >
                <img src="Vista/images/banner.jpg" height=2000px width=2000px>
                <div class="container">
                    <div class="text_box">
                        <span><li><strong>ESTILO</strong></li></span>
                        <h1>Cortando por<br> 
                un nuevo Look</h1>
                        <a href="contact.html">Reserva</a>
                    </div>
                </div>
            </div>
            

            <!-- end slider section -->

            <!-- about -->
            <div id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_box">
                                <span>Bienvenidos a Peluqueria el Sol</span>
                                <h2>Sobre<strong class="white"> Nuestro Salon</strong></h2>
                                <p>El Salón de Belleza El Sol cuenta con servicios de cepillado, tinte, corte de cabello, manicura y pedicura, entre otros. El salón de belleza cuenta con un administrador y empleados que realizan las diferentes actividades relacionadas con los servicios.</p>
                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_img">
                                <figure><img src="Vista/images/about_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->
            <!-- service -->
            <div id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Nuestros<strong class="white_ll"> Servicios</strong></h2>
                                <span> </span>
                            </div>
                        </div>
                    </div>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/cepillado.jpg"></figure>
                                                    <h3>Cepillado</h3>
                                                    <p>este proceso consiste en tratar el cabello con lavados con tratamientos, secado y por ultimo un peinado</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/tinte.jpg"></figure>
                                                    <h3> Tinte </h3>
                                                    <p>este proceso consiste en el cambio del color natural del cabello a otro deseado por el cliente</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/corte.jpg"></figure>
                                                    <h3>Corte</h3>
                                                    <p>este proceso consiste en el recorte del cabello del cliente a como el desea</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/manicura.jpg"></figure>
                                                    <h3>Manicura</h3>
                                                    <p>cuidado y arreglo de las manos y de las uñas</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/pedicura.jpg"></figure>
                                                    <h3> Pedicura</h3>
                                                    <p>cuidado y arreglo de los pies y de las uñas</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/micro.jpg"></figure>
                                                    <h3>Microblading</h3>
                                                    <p>consiste en la aplicación de procedimientos químicos o físicos con el objetivo de mejorar la apariencia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/alizado.jpg"></figure>
                                                    <h3>Alisado</h3>
                                                    <p>Método profesional de estilizado que modifica la estructura capilar, volviéndola totalmente lacia</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/recogido.jpg"></figure>
                                                    <h3> Peinados</h3>
                                                    <p> Peinado que consiste en recoger el cabello con una finalidad estética</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="Vista/images/depilacion.jpg"></figure>
                                                    <h3>Depilacion</h3>
                                                    <p>Eliminación del pelo o el vello de una parte del cuerpo, generalmente de las cejas</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end service -->
            <!-- pricing -->
            <div class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Tabla d<strong class="white">e Precios</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mar_bottom">
                            <div class="pricing_img">
                                <figure><img src="Vista/images/peluqueria.jpg" alt="#" />
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pad_left">
                            <div class="pricing_box">
                                <div class="list">
                                    <ul>
                                        <li><span class="float-left">Cepillado</span><span class="float-right">$ 20.000</span></li>
                                        <li><span class="float-left">Tinte capliar</span><span class="float-right">$ 60.000</span></li>
                                        <li><span class="float-left">Corte de Cabello</span><span class="float-right">$ 20.000</span></li>
                                        <li><span class="float-left">Manicura</span><span class="float-right">$ 30.000</span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="float-left">Pedicura</span><span class="float-right">$ 30.000</span></li>
                                        <li><span class="float-left">Peeling</span><span class="float-right">$ 40.000</span></li>
                                        <li><span class="float-left">Alisado</span><span class="float-right">$ 40.000</span></li>
                                        <li><span class="float-left">Recogidos</span><span class="float-right">$ 20.000</span></li>
                                    </ul>
                                    <a href="#">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="opening">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ourheading">
                                        <h2>Hora<strong class="white">rios</strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="opening_bg">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="times">
                                            <ul>
                                                <li><span>Lunes</span><span class="float-right">8:00am       <strong class="bbbb">8:00pm</strong></span></li>
                                                <li><span>Martes </span><span class="float-right">8:00am       <strong class="bbbb">8:00pm</strong></span></li>
                                                <li><span>Miercoles</span><span class="float-right">8:00am      <strong class="bbbb">8:00pm</strong></span></li>
                                                <li><span>Jueves </span><span class="float-right">8:00am       <strong class="bbbb">8:00pm</strong></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="times">
                                            <ul>
                                                
                                                <li><span>Viernes</span><span class="float-right">8:00am       <strong class="bbbb">8:00pm</strong></span></li>
                                                <li><span>Sabado</span><span class="float-right">10:00am        <strong class="bbbb">10:00pm</strong></span></li>
                                                <li><span>Domingo</span><span class="float-right">Cerrado</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end Pricing -->

                </div>

               
                <!-- end contact -->
                <!-- footer -->
                <fooetr>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer_logo">
                                        <a class="logo" href="index.php"><img src="Vista/images/logo.png" alt="#" width="100" height="100" /></a>
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

                                        <li> <img src="Vista/images/fb.png" alt="#" /></li>
                                        <li> <img src="Vista/images/tw.png" alt="#" /></li>
                                        <li> <img src="Vista/images/you.png" alt="#" /></li>

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
            <script src="Vista/js/jquery.min.js"></script> <!--enlaza la biblioteca jQuery al documento HTML. jQuery es una biblioteca de JavaScript que facilita la manipulación del DOM y la creación de interacciones y animaciones en la página web-->
            <script src="Vista/js/popper.min.js"></script>  <!--enlaza la biblioteca Popper al documento HTML. Popper es una biblioteca de posicionamiento de JavaScript que se usa a menudo con herramientas como Bootstrap para gestionar el posicionamiento de elementos emergentes y ventanas modales en la página web-->
            <script src="Vista/js/bootstrap.bundle.min.js"></script> <!--enlaza la biblioteca Bootstrap al documento HTML. Bootstrap es un marco de diseño que proporciona componentes y estilos predefinidos para crear interfaces web con una apariencia consistente y responsiva-->
            <script src="Vista/js/owl.carousel.min.js"></script> <!--enlaza la biblioteca Owl Carousel al documento HTML. Owl Carousel es una biblioteca de JavaScript que permite crear carruseles interactivos y deslizables-->
            <script src="Vista/js/custom.js"></script> <!--enlaza un archivo JavaScript personalizado al documento HTML. Este archivo "custom.js" contiene código personalizado que puede proporcionar funcionalidades específicas y personalizadas para la página web-->
            <script src="Vista/js/jquery.mCustomScrollbar.concat.min.js"></script> <!--enlaza la biblioteca jQuery Custom Scrollbar al documento HTML. Esta biblioteca agrega estilos y funcionalidades personalizadas a las barras de desplazamiento en la página web, permitiendo una experiencia de desplazamiento mejorada y personalizable-->

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