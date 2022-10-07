<?php
include "bd/conexion.php";
session_start();
if($_POST){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $pass_c=sha1($password);
    $confirmarpassword=$_POST['confirmarpassword'];
        if ($password!== $confirmarpassword) { 
            echo '<script>alert("La contraseña no coincide")</script>';
       }else {
        
        $sql = "INSERT INTO usuarios(usuario,password,nombre_usuario) VALUES ('$usuario','$password','$nombre_usuario')";
        $result = $conexion->query($sql);
        echo '<script>alert("Se Registro Correctamente Ingrese a la Pagina web")</script>';
    header("Location: login.php");
       }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Minimarcket</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                 <div class="form-floating mb-3">
                                                <input class="form-control"  type="email" name="usuario" placeholder="name@example.com" />
                                                <label for="exampleInputusuario">Correo</label>
                                                </div>  
                                            </div>
                                            <div class="row mb-3">
                                                 <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" name="nombre_usuario" placeholder="name@example.com" />
                                                <label for="exampleInputusuario">Nombre Usuario</label>
                                                </div>  
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password"  type="password" placeholder="Create a password" />
                                                        <label for="exampleInputPassword">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="confirmarpassword" type="password" placeholder="Confirm password" />
                                                        <label for="exampleInputPasswordconfirm">Confirmar Contraseña</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Crear Cuenta</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">¿Tienes una cuenta? Ir a iniciar sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sitio web 2022</div>
                            <div>
                                <a href="#">Politica de Privacidad</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
