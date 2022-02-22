<?php
    session_start();
    include('funciones.php');
    include('conexion.php');
    $IdCancion = "";
    if(isset($_POST["IdCancion"])){
        $IdCancion = trim($_POST["IdCancion"]); 
        if ($IdCancion == ""){
            if(isset($_GET["IdCancion"])){
                $IdCancion = $_GET["IdCancion"];
                if ($IdCancion == ""){
                    $IdCancion = "";
                }
            }
        }
    }    
    else{ 
        if ($IdCancion == ""){
            $IdCancion = "";
        }
        if(isset($_GET["IdCancion"])){ 
            $IdCancion = $_GET["IdCancion"];
            if ($IdCancion == ""){
                $IdCancion = "";
            }
        }    
    }
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
            document.getElementById("pdf").value = "";
            document.getElementById("artista").value = "";
            window.location.href = "canciones.php";
        }

    </script>

</head>
<body>
    <?php

    if ($_SESSION['tipoUsuario'] == 1 && $_SESSION['IdUsuario'] != 0) {
        ?>
        <div class="container text-center" style="padding-top: 50px;">
            <form action="eArtistas.php?padre=3" method="post" class="form-container" enctype='multipart/form-data'>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre del Artista</span>
                    <?php
                        if ($IdCancion != "") {
                            $nombre = "";
                            $pdf = "";
                            $url = "";
                            $query = "select Nombre, RutaTab, Video from canciones where IdCancion = '".$IdCancion."'";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_row($result)) {
                                $nombre = $row[0];
                                $pdf = $row[1];
                                $url = $row[2];
                            }
                            llenaComboSaltado("select IdArtista, Nombre from artistas order by IdArtista",$IdArtista,"artista");
                            echo '<input type="hidden" name="IdCancion" id="id" value="'.$IdCancion.'">';
                            ?>
                            <label class="input-group-text" for="inputGroupFile01">Nombre de la cancion</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                            <?php
                            echo '</div><br>';
                            ?>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Pdf de la tab</label>
                                <input type="file" class="form-control" id="pdf" name="pdf" value="<?php echo $pdf; ?>">
                                <label class="input-group-text" for="inputGroupFile01">Url del video</label>
                                <input type="text" class="form-control" id="url" name="url" value="<?php echo $url; ?>">
                            <?php
                        }else{
                            llenaComboSaltado("select IdArtista, Nombre from artistas order by IdArtista","algo","artista")
                            ?>
                            <label class="input-group-text" for="inputGroupFile01">Nombre de la cancion</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Pdf de la tab</label>
                                <input type="file" id="pdf" name="pdf" class="form-control">
                                <label class="input-group-text" for="inputGroupFile01">Url del video</label>
                                <input type="text" id="url" name="url" class="form-control">
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
            <form form action="eArtistas.php?padre=4" method="post" class="form-container">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de la cancion</th>
                        <th scope="col">Nombre del artista</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = 0;
                        $nombre = "";
                        $videos = "";
                        $query = "select IdCancion, a.Nombre, c.Nombre, a.IdArtista from canciones c, artistas a where c.IdArtista = a.IdArtista order by IdCancion asc";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr><td class = 'px-4 py-3 text-sm border'> <p class = 'font-semibold'>".$row[0]."</p></td> \n";
                            echo "<td class = 'px-4 py-3 text-sm border'> <a href='canciones.php?IdCancion=".$row[0]."&IdArtista=".$row[3]."'><p class = 'font-semibold'>".$row[2]."</p></a></td> \n";
                            echo "<td class = 'px-4 py-3 text-sm border'> <p class = 'font-semibold'>".$row[1]."</p></td> \n";
                            echo "<td class = 'px-4 py-3 text-sm border'><input type='checkbox' name='chk[]' value='".$row[0]."'></td></tr>";
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