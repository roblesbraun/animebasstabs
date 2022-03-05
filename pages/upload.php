<?php

    include('conexion.php');
    include('funciones.php');

    $padre = "";
    if(isset($_POST["padre"])){
        $padre = trim($_POST["padre"]); 
        if ($padre == ""){
            if(isset($_GET["padre"])){
                $padre = $_GET["padre"];
                if ($padre == ""){
                    $padre = "";
                }
            }
        }
    }    
    else{ 
        if ($padre == ""){
            $padre = "";
        }
        if(isset($_GET["padre"])){ 
            $padre = $_GET["padre"];
            if ($padre == ""){
                $padre = "";
            }
        }    
    }

    if ($padre == 3) {
        $id = 0;
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $query = "INSERT INTO banner(Titulo, Descripcion) VALUES ('".$titulo."', '".$descripcion."')";
        $result = mysqli_query($conn,$query);
        $query = "select IdBanner from banner order by IdBanner desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }
        //imagen
        $imagen=$_FILES['im1']['name'];
        $tipo = $_FILES['im1']['type'];
        $temp = $_FILES['im1']['tmp_name'];
        //$imagen = "imagen-".$id;
        //echo $imagen."\n";
        move_uploaded_file($temp,'../assets/banner/'.$id.'-'.$imagen);
        $sql = "update banner set Imagen = '".$id."-".$imagen."' where IdBanner = ".$id;
        mysqli_query($conn, $sql);
        header("Location: upBanner.php?padre=1");
    }


?>