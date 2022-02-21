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

?>