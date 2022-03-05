<?php
    include('conexion.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php

    if ($_SESSION['tipoUsuario'] == 1 && $_SESSION['IdUsuario'] != 0) {
        ?>
        <div class="container text-center" style="padding-top: 100px;">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="../assets/img/youtube.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Artista</h5>
                            <p class="card-text">Sube un nuevo Artista o Selecciona el artista que deseas editar</p>
                            <br>
                            <a href="artistas.php" class="btn btn-primary">Artistas</a>
                        </div>
                    </div>              
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="../assets/img/youtube.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Canciones</h5>
                            <p class="card-text">Sube una nueva canción o Selecciona la canción que deseas editar</p>
                            <br>
                            <a href="canciones.php" class="btn btn-primary">Canciones</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="../assets/img/youtube.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            <p class="card-text">Observa a tus seguidores y saca analiticos</p>
                            <br>
                            <a href="usuarios.php" class="btn btn-primary">Usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="../assets/img/youtube.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Subir imagen al Banner</h5>
                            <p class="card-text">Sube una imagen al banner</p>
                            <br>
                            <a href="upBanner.php" class="btn btn-primary">Subir imagen del Banner</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="../assets/img/youtube.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Eliminar imagen del Banner</h5>
                            <p class="card-text">Eliminar imagen del banner que ya no se use</p>
                            <br>
                            <a href="deleteItems.php?padre=3" class="btn btn-primary">Eliminar del Banner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }else{
        ?>
        <h1>No tienes derecho a ingresar</h1>
        <?php
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>