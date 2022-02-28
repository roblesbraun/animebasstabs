<?php
    session_start();
    include('funciones.php');
    include('conexion.php');
    $IdArtista = "";
    if(isset($_POST["IdArtista"])){
        $IdArtista = trim($_POST["IdArtista"]); 
        if ($IdArtista == ""){
            if(isset($_GET["IdArtista"])){
                $IdArtista = $_GET["IdArtista"];
                if ($IdArtista == ""){
                    $IdArtista = "";
                }
            }
        }
    }    
    else{ 
        if ($IdArtista == ""){
            $IdArtista = "";
        }
        if(isset($_GET["IdArtista"])){ 
            $IdArtista = $_GET["IdArtista"];
            if ($IdArtista == ""){
                $IdArtista = "";
            }
        }    
    }

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
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script>

        function limpiar(){
            document.getElementById("nombre").value = "";
            document.getElementById("id").value = "";
            document.getElementById("imagen").value = "";
            document.getElementById("rutaImagen").value = "";
            window.location.href = "artistas.php";
        }

    </script>

</head>
<body>
    <?php

    if ($_SESSION['tipoUsuario'] == 1 && $_SESSION['IdUsuario'] != 0) {
        ?>
        <div class="container text-center" style="padding-top: 50px;">
            <form action="eArtistas.php?padre=1" method="post" class="form-container" enctype='multipart/form-data'>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre del Artista</span>
                    <?php
                        if ($IdArtista != "") {
                            $artista = "";
                            $imagen = "";
                            $query = "select Nombre, Imagen from artistas where IdArtista = '".$IdArtista."'";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_row($result)) {
                                $artista = $row[0];
                                $imagen = $row[1];
                            }
                            echo '<input type="text" class="form-control" id="nombre" name="nombre" value="'.$artista.'">';
                            echo '<input type="hidden" name="IdArtista" id="id" value="'.$IdArtista.'">';
                            echo '</div><br>';
                            ?>
                            <div class="input-group mb-3">
                                <?php
                                    echo "<img src='../assets/artistas/img/".$imagen."' id='rutaImagen' class='img-fluid ' style='width: 100px; height: 100px;'/>"
                                ?>
                                <label class="input-group-text" for="inputGroupFile01">Upload Image 2</label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                                <?php echo '<input type="hidden" class="form-control" name="imagenOriginal" value="'.$imagen.'">'; ?>
                            <?php
                        }else{
                            ?>
                            <input type="text" class="form-control" placeholder="Clickea en un artista para modificar el nombre" id="nombre" name="nombre">
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Upload Image</label>
                                <input type="file" id="name" name="imagen" class="form-control">
                            <?php
                        }
                    ?>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Aceptar Cambios</button>
            </form>
            <br>
            <button class="btn btn-primary" onclick="limpiar()">Limpiar</button>
        </div>
        <div class="container text-center" style="padding-top: 50px;">
            <form form action="eArtistas.php?padre=2" method="post" class="form-container">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Canciones</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = 0;
                        $nombre = "";
                        $videos = "";
                        $query = "select IdArtista, Nombre from artistas order by IdArtista asc";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_row($result)) {
                            $id = $row[0];
                            $nombre = $row[1];
                            $query = "select count(*) from canciones where IdArtista = '".$id."'";
                            $result2 = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_row($result2)) {
                                $videos = $row[0];
                                echo "<tr><td class = 'px-4 py-3 text-sm border'> <p class = 'font-semibold'>".$id."</p></td> \n";
                                echo "<td class = 'px-4 py-3 text-sm border'> <a href='artistas.php?IdArtista=".$id."'><p class = 'font-semibold'>".$nombre."</p></a></td> \n";
                                echo "<td class = 'px-4 py-3 text-sm border'> <p class = 'font-semibold'>".$videos."</p></td> \n";
                                echo "<td class = 'px-4 py-3 text-sm border'><input type='checkbox' name='chk[]' value='".$id."'></td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
            <br>
            <a href="admin.php" class="btn btn-primary">Regresar</a>
            <?php
                if($bandera != ""){
                    ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        Tienes artistas que contienen videos, por favor elimina los videos primero.
                    </div>
                    <?php
                }
            ?>
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