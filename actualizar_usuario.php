<?php
require_once("../Modelo/Usuarios.php");
require_once("../Modelo/Login.php");
$ModeloLogin=new Login();
      $ModeloLogin->validateSession();
      $model=new Usuario();
      $model->idUsuario=$_GET["idUsuario"];
      $Usuario=$model->Obtener($model->idUsuario);
?>

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
    <title>SOL</title>
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
                    <li>
                        <a href="service.php">Servicios</a>
                    </li>
                  

                </ul>

            </nav>
        </div>
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
            <!-- end header -->
            <div class="yellow_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Actualizar usuario</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="title">
                                <h2>actualizar<strong class="white"> usuario</strong></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">
                                <?php
                                   if($Usuario!=null) { 
                                    foreach($Usuario as $datos) {
                                     ?>

                                                <ol class="breadcrumb">
                                            <h>Correo del Usuario:  </h5><!--LLAMA A LA VISTA USUARIOS. PHP--> 
                                                <br>
                                                 <li class="active"><?php echo $datos ["idUsuario"] != null ? $datos["correoUsuario"]: 'Nuevo Registro'; ?></li>
                                             </ol>
                                             
                                         <form id="frm-usuario" action="../Controlador/Editar_Usuarios.php" method="POST" enctype="multipart/form-data"> <!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO EDITARUSUARIO.PHP --->



                                            <input type="hidden" name="idUsuario" value="<?php echo $datos["idUsuario"]; ?>" /><!--LA CLAVE PRINCIPAL ESTÁ OCULTA Y TOMA COMO VALOR EL ID DE LA VARIABLE $datos["id"]--->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <h3>correo del usuario</h3>
                                                <input type="email" name="correoUsuario" value="<?php echo $datos["correoUsuario"]; ?>" class="form-control" style ="background-color:transparent" placeholder="correo usuario" required="true" />
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <h3>contraseña</h3>
                                                <input type="password" name="passwordUsuario" value="<?php echo $datos["passwordUsuario"]; ?>" class="form-control" style ="background-color:transparent" placeholder="contraseña usuario" required="true" />
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <h3>estadoUsuario</h3>
                                                <input type="text" name="estadoUsuario" value="<?php echo $datos["estadoUsuario"]; ?>" class="form-control" style ="background-color:transparent" placeholder="Activo/Inactivo" required="true" />
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <h3>rol</h3>
                                            <select name="IdRolFK" class="form-control"  required="true" style ="background-color:transparent" >
                                            <option <?php echo $datos["IdRolFK"] == 1 ? "selected" : ""; ?> value="1">Empleado</option>
                                            <option <?php echo $datos["IdRolFK"] == 2 ? "selected" : ""; ?> value="2">cliente</option>
                                            <option <?php echo $datos["IdRolFK"] == 3 ? "selected" : ""; ?> value="3">Administrador</option>
                                            </select>
                                                <hr/>
                                            
                                                <button class="btn btn-success">Actualizar</button>
                                            
                                            <?php
                                            }
                                            }
                                            ?>
                                      
                                </div>
                                <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact -->
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