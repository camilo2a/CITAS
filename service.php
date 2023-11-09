<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Peluqueria Sol</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">Sobre nosotros</a>
                    </li>
                    <li class="active">
                        <a href="service.php">Servicios</a>
                    </li>
                  

                    <li>
                        <a href="contact.php">Registrarse/Iniciar sesion</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="../index.php"><img src="images/logo.png" alt="#" width="100" height="100" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
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
            

            <div class="yellow_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Servicios y Precios</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service -->
            <div id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Nuestros<strong class="white_ll"> Servicios</strong></h2>
                                <span> Estos son los servicios que ofrece nuestro Salon</span>
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
                                                    <figure><img src="images/cepillado.jpg"></figure>
                                                    <h3>Cepillado</h3>
                                                    <p>este proceso consiste en tratar el cabello con lavados con tratamientos, secado y por ultimo un peinado</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/tinte.jpg"></figure>
                                                    <h3> Tinte Capilar</h3>
                                                    <p>este proceso consiste en el cambio del color natural del cabello a otro deseado por el cliente</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/corte.jpg"></figure>
                                                    <h3>Corte de cabello</h3>
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
                                                    <figure><img src="images/manicura.jpg"></figure>
                                                    <h3>Manicura</h3>
                                                    <p>cuidado y arreglo de las manos y de las uñas</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/pedicura.jpg"></figure>
                                                    <h3> Pedicura</h3>
                                                    <p>cuidado y arreglo de los pies y de las uñas</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/peeling.jpg"></figure>
                                                    <h3>Peeling</h3>
                                                    <p>onsiste en la aplicación de procedimientos químicos o físicos con el objetivo de mejorar la apariencia</p>
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
                                                    <figure><img src="images/alizado.jpg"></figure>
                                                    <h3>Alisado</h3>
                                                    <p>Método profesional de estilizado que modifica la estructura capilar, volviéndola totalmente lacia</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/recogido.jpg"></figure>
                                                    <h3> Recogidos</h3>
                                                    <p> Peinado que consiste en recoger el cabello con una finalidad estética</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/depilacion.jpg"></figure>
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
                    <figure><img src="images/peluqueria.jpg" alt="#" />
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

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="times">
                                <ul>
                                    <li><span>Jueves </span><span class="float-right">8:00am       <strong class="bbbb">8:00pm</strong></span></li>
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
            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a class="logo" href="../index.php"><img src="images/logo.png" alt="#" width="100" height="100" /></a>
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

        <div class="overlay"></div>
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript">
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