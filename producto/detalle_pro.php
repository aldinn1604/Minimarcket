<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Minimarcket Estrellita</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Estrellita</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Iniciar Sesion</a></li>
                        <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div id="header">
                                <ul class="nav">
                                    <li><a href="../index.php">Inicio</a></li>
                                    <li><a href="">Productos</a>
                                    <ul>
                                            <li><a href="1.php">Aguas y Bebidas</a></li>
                                            <li><a href="2.php">Aseo y limpieza</a></li>
                                            <li><a href="3.php">Bodega</a></li>
                                            <li><a href="4.php">Frutas y verduras</a></li>
                                            <li><a href="5.php">Golosinas</a></li>
                                            <li><a href="6.php">Lacteos</a></li>
                                            <li><a href="7.php">Licoria</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../ofertas.php">Ofertas</a></li>
                                    <li><a href="../nosotros.html">Nosotros</a></li>
                                </ul>
                            </div>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                CRUD
                            </div>
                            <ul class="nav">
                                <li><a href="index.php">Agregar</a></li>
                            </ul>

                        </div>
                    </div>
                   
                    <div class="sb-sidenav-footer">
                    <div class="small">Programadores:</div>
                        Aldinn Y Danuska :)
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            
            <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Estrellita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Minimarcket-Estrellita</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-24">
                                <div class="card  text-white mb-1">
                                    <div class="d-flex align-items-center justify-content-between color">
                                    <section class="detalle" >
                        <div class="detalle1">
                                             <?php
                                       include("../bd/conexion.php");
                                       $id_producto=$_REQUEST['id_producto'];
                                        $query = "SELECT * FROM producto where id_producto='$id_producto'";
                                       $result = $conexion->query($query);
                                       while($row = $result->fetch_assoc()){
                                           ?>
                                             <div class="detalle2">
                                                <div>
                                                <img  class="detalle-pro"  src="data:imagen/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
                                                </div>
                                            <div>
                                            <p class="detalle-p">Codigo del producto:<span><?php echo $row['id_producto'];?></span></p>
                                                      <p class="detalle-p"><span><?php echo $row['nombre_producto'];?></span></p>
                                                      <p class="detalle-p">Precio:<span><?php echo $row['precio_producto'];?></span></p>
                                                      <p class="detalle-p"><span><?php echo $row['presentacion'];?></span></p>
                                                      <p class="detalle-p">Stock:<span><?php echo $row['cantidad'];?></span></p>
                                                      <p class="detalle-p">Fecha Caducidad<span><?php echo $row['fecha_caducidad'];?></span></p>
                                                      <p class="detalle-p">Codigo de Categoria:<span><?php echo $row['id_categoria_fk'];?></span></p>
                                            </div>
                                           </div> 
                                                   
                                               
                                            <?php
                                            }
                                              ?>
                        </div>
                        <button class="detalle-btn">
                                     <a class="detalle-a"  href="../index.php">Ok!</a>
                                     </button>
                      </section>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    
                    </div>
                </main>

                <footer>
                    <section class="dat">
                            <section class="datos">
                                <h2>CONTACTO</h2>
                                <p class="dts"><b>WhatsaApp: </b>+51 967185427 <BR>
                                <b>Correo: </b>ventas@minimarketestrellita.com</BR>
                                <b>Dirección: </b>Calle 28 N° 153 - Rosales <BR>
                                <b>Horarios: </b> 8:00 am a 8:00 pm</p>
                            </section>
                            <section class="datos1">
                                <h2>INFORMACION GENERAL</h2>
                                <p class="dts"> <a href="#" target="_blank">Nosotros</a> <br><br>
                                    <a href="#" target="_blank">Terminos y Condiciones<br><br>
                                        <a href="#" target="_blank">Envios y devoluviones</p>
                            </section>
            
                            <section class="datos2">
                                <h2>MI CUENTA</h2>
                                <p class="dts"><a href="#" target="_blank">Mi Cuenta</a><br><br>
                                    <a href="#" target="_blank">Mis Pedidos</a><br></p>
                            </section>
            
            
                            <section class="log">
                                <h2>SÍGUENOS EN</h2><br>
                                <img class="fb1" src="../imagenes/fb.jpg" alt="">
                                <img class="google" src="../imagenes/instagram.png" alt="">
                            </section>
                        </section>
                        
                       
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
