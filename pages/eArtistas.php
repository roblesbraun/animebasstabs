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

    if ($padre == 1) {
        if ($IdArtista != "") {
            $imagen=$_FILES['imagen']['name'];
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            if ($imagen == "") {
                modificaArtista($IdArtista, $_POST["nombre"], $_POST['imagenOriginal'], $tipo, "NO");
            }else{
                modificaArtista($IdArtista, $_POST["nombre"], $imagen, $tipo, $temp);
            }
        }else{
            //imagen
            $imagen=$_FILES['imagen']['name'];
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];
            $bandera = insertaArtista($_POST["nombre"], $imagen, $tipo, $temp);
        }
        
    }else if($padre == 2) {
        $arreglo = $_POST['chk'];
        $bandera = 0;
        $bandera = eliminaArtistas($arreglo, 0, $bandera);
        if ($bandera > 0) {
            header("Location: artistas.php?bandera=".$bandera);
        }else{
            header("Location: artistas.php");
        }
    }else if($padre == 3){
        if ($IdCancion != "") {//Esta modificando el artista
            $pdf = $_FILES['pdf']['name'];
            $tipoPdf = $_FILES['pdf']['type'];
            $tempPdf = $_FILES['pdf']['tmp_name'];
            if ($pdf == "") {
                $pdf = $_POST['pdf2'];
                $tempPdf = "NO";
            }
            modificaCancion($_POST["nombre"], $_POST["artista"],$_POST["url"], $pdf, $tipoPdf, $tempPdf, $IdCancion);        
        }else{
            $pdf = $_FILES['pdf']['name'];
            $tipoPdf = $_FILES['pdf']['type'];
            $tempPdf = $_FILES['pdf']['tmp_name'];
            
            insertaCancion($_POST["nombre"], $_POST["artista"],$_POST["url"], $pdf, $tipoPdf, $tempPdf);
        }
    }else if($padre == 4){
        $arreglo = $_POST['chk'];
        eliminaCancion($arreglo);
    }
?>