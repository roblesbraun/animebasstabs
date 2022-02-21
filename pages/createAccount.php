<?php

    include('funciones.php');
    include('conexion.php');

    $bandera = "";
    if(isset($_POST["bandera"])){
        $bandera = trim($_POST["bandera"]); 
        if ($bandera == ""){
            if(isset($_GET["bandera"])){
                $bandera = $_GET["bandera"];
                if ($bandera == ""){
                    $bandera = "";
                }
            }
        }
    }    
    else{ 
        if ($bandera == ""){
            $bandera = "";
        }
        if(isset($_GET["bandera"])){ 
            $bandera = $_GET["bandera"];
            if ($bandera == ""){
                $bandera = "";
            }
        }    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
        }
    </style>

</head>
<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../assets/img/youtube.svg" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="validaDatos.php?padre=1" enctype='multipart/form-data' method="post" class="form-container" name='principal'>
                    <br>
                    <!-- Email input -->
                    <div class="form-outline ">
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un correo valido" name="correo" required />
                        <label class="form-label" for="form3Example3">Correo Electronico</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline">
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Ingresa una contraseña para inciar sesión" name="contrasenia" required />
                        <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline ">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa tu nombre completo" name="nombre" required />
                        <label class="form-label" for="form3Example3">Nombre Completo</label>
                    </div>

                    <!-- telefono input -->
                    <div class="form-outline ">
                        <input type="number" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un numero telefonico valido" name="telefono" required/>
                        <label class="form-label" for="form3Example3">Numero Telefonico</label>
                    </div>

                    <!-- Tipo de Sexo input -->
                    <div class="form-outline">
                        <?php
                        LlenaComboSaltado("select IdTipoSexo, Descripcion from tipossexos order by IdTipoSexo","algo","sexo");
                        ?>
                        <label class="form-label" for="form3Example4">Sexo</label>
                    </div>

                    <!-- Edad input -->
                    <div class="form-outline ">
                        <input type="number" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un numero telefonico valido" name="edad" max="100" min="10" required/>
                        <label class="form-label" for="form3Example3">Edad</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                    </div>
                </form>
                <?php
                    if($bandera != ""){
                        ?>
                        <br>
                        <div class="alert alert-danger" role="alert">
                            Ya existe una cuenta con esos datos!!
                        </div>
                        <?php
                    }
                ?>
            </div>
            </div>
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

