<?php
    function LlenaComboSaltado($Sql,$descripcion,$valor){
        include('./conexion.php');
        $result = mysqli_query($conn,$Sql);
        if (mysqli_num_rows($result)>0){
            $i=0;
            $j=0;
            echo"<select class='form-select' aria-label='Default select example' id='$valor' name='$valor'>";
            echo "<option selected value=0>Selecciona ".$valor."</option>";
              while ($row=mysqli_fetch_row($result)){
                if($row[$i]==$descripcion){
                    echo "<Option selected value=".$row[0].">$row[1]";
                }else{
                    echo "<Option value=".$row[0].">$row[1]";
                }
                $j++;	
            }
            echo"</select>";
            mysqli_free_result($result);
        }else{
            echo"<h4>NO HAY RESULTADOS DISPONIBLES</h4>";
        }
            
                
    }

    function registro($nombre, $correo, $contrasenia, $sexo, $edad, $telefono){
        include('conexion.php');
        $conteo = 0;
        $query = "select count(*) from usuarios where correo = '".$correo."'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_row($result)) {
            $conteo = $row[0];
        }
        if($conteo > 0){
            return "2";
        }else{
            $query = "insert into usuarios (Nombre, Correo, Contraseña, Telefono, IdSexo, IdTipoUsuario, Edad) 
            values ('".$nombre."','".$correo."','".$contrasenia."','".$telefono."','".$sexo."','2','".$edad."')";
            mysqli_query($conn, $query);
            return "1";
        }
    }

    function login($correo, $password){
        session_start();
        include('conexion.php');
        $conteo = 0;
        $query = "select count(*) from usuarios where Correo = '".$correo."' and Contraseña = '".$password."'";
        echo $query;
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_row($result)) {
            $conteo = $row[0];
        }
        if($conteo > 0){
            $query = "select IdUsuario, IdTipoUsuario from usuarios where Correo = '".$correo."' and Contraseña = '".$password."'";
            $result = mysqli_query($conn, $query);
            $_SESSION['tipoUsuario'] = 0;
            $_SESSION['IdUsuario'] = 0;
            while ($row = mysqli_fetch_row($result)) {
                $_SESSION['tipoUsuario'] = $row[1];
                $_SESSION['IdUsuario'] = $row[0];
            }
            if ($_SESSION['tipoUsuario'] == 1) { //Admin
                return "1";
            }else{
                return "2";
            }
        }else{
            return "3";
        }
    }

    function insertaArtista($nombre, $imagen, $tipo, $temp){
        include('conexion.php');
        $id = 0;
        $query = "INSERT INTO artistas (Nombre) VALUES ('".$nombre."')";
        $result = mysqli_query($conn,$query);
        $query = "select IdArtista from artistas order by IdArtista desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }
        move_uploaded_file($temp,'../assets/artistas/img/'.$id.'-'.$imagen);
        $sql = "update artistas set Imagen = '".$id."-".$imagen."' where IdArtista = ".$id;
        mysqli_query($conn, $sql);
        header("Location: artistas.php");
        
    }

    function insertaCancion($nombre, $artista, $url, $pdf, $tipoPdf, $tempPdf){
        include('conexion.php');
        // $mystring = 'https://www.youtube.com/embed/';
        // $findme   = 'https://www.youtube.com/watch?v='; // 0,32 - 32,-1
        $url = 'https://www.youtube.com/embed/' . substr($url, 32, null);
        $id = 0;
        $query = "INSERT INTO canciones (IdArtista, Video, Nombre) VALUES ('".$artista."','".$url."','".$nombre."')";
        $result = mysqli_query($conn,$query);
        $query = "select IdCancion from canciones order by IdCancion desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }
        move_uploaded_file($tempPdf,'../assets/canciones/tabs/'.$id.'-'.$pdf);
        $sql = "update canciones set RutaTab = '".$id."-".$pdf."' where IdCancion = ".$id;
        mysqli_query($conn, $sql);
        header("Location: canciones.php");
    }

    function modificaArtista($IdArtista, $nombre, $imagen, $tipo, $temp){
        include('conexion.php');
        $id = 0;
        
        
        if ($temp != "NO") {
            $query = "update artistas set Nombre= '".$nombre."' , Imagen = '".$IdArtista."-".$imagen."' where IdArtista ='".$IdArtista."'";
            move_uploaded_file($temp,'../assets/artistas/img/'.$IdArtista.'-'.$imagen);
        }else{
            $query = "update artistas set Nombre= '".$nombre."' where IdArtista ='".$IdArtista."'";
        }
        //echo $query;
        $result = mysqli_query($conn,$query);
        header("Location: artistas.php");
        
    }
    function modificaCancion($nombre, $artista, $url, $pdf, $tipoPdf, $tempPdf, $IdCancion){
        include('conexion.php');
        $findme   = 'https://www.youtube.com/embed/';
        $pos = strpos($url, $findme);
        if ($pos === false) {
            $url = 'https://www.youtube.com/embed/' . substr($url, 32, null);
        }
        
        if ($tempPdf != "NO") {
            $query = "update canciones set Nombre= '".$nombre."' , RutaTab = '".$IdCancion.'-'.$pdf."', Video = '".$url."', IdArtista = '".$artista."' where IdCancion ='".$IdCancion."'";
            move_uploaded_file($tempPdf,'../assets/canciones/tabs/'.$IdCancion.'-'.$pdf);
        }else{
            $query = "update canciones set Nombre= '".$nombre."', Video = '".$url."', IdArtista = '".$artista."' where IdCancion ='".$IdCancion."'";
        }
        $result = mysqli_query($conn,$query);
        
        header("Location: canciones.php");
    }
    function eliminaArtistas($arreglo, $i, $bandera){
        include('conexion.php');
        if ($i < count($arreglo)) {
            $sql = "select count(*) from canciones where IdArtista =".$arreglo[$i];
            $result = mysqli_query($conn, $sql);
            $conteo = 0;
            while ($row = mysqli_fetch_row($result)) {
                $conteo = $row[0];
            }
            if ($conteo != 0) {
                $bandera = $bandera + 1;
            }else{
                $sql = "delete from artistas where IdArtista =".$arreglo[$i];
                $result = mysqli_query($conn, $sql);
            }
            eliminaArtistas($arreglo, $i + 1, $bandera);
        }else{
            return $bandera;
        }
    }
    function eliminaCancion($arreglo){
        include('conexion.php');
        for ($i=0; $i < count($arreglo); $i++) { 
            $sql = "delete from canciones where IdCancion =".$arreglo[$i];
            $result = mysqli_query($conn, $sql);
        }
        header("Location: canciones.php");
    }

?>