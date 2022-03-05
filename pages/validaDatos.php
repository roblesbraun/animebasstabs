<?php

    include('funciones.php');
    include('conexion.php');

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


    if($padre == 1){ //Se esta registrando un usuario
        $bandera = registro($_POST["nombre"], $_POST["correo"], $_POST["contrasenia"], $_POST["sexo"], $_POST["edad"], $_POST["telefono"]);
        if($bandera == "1"){ //Bien
            header("Location: login.php");
        }else{ //Error
            header("Location: createAccount.php?bandera=".$bandera);
        }
    }else if($padre == 2){ // Esta haciendo login
        $bandera = login($_POST["correo"], $_POST["contrasenia"]);
        if($bandera == "1"){ //Bien admin
            header("Location: admin.php");
        }else if($bandera == "2"){ //Bien user
            header("Location: ../index.php");
        }else { //Error
            header("Location: createAccount.php?bandera=".$bandera);
        }
    }else if($padre == 3){

    }


?>