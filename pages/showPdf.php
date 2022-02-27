<?php
    $pdf = "";
    if(isset($_POST["pdf"])){
        $pdf = trim($_POST["pdf"]); 
        if ($pdf == ""){
            if(isset($_GET["pdf"])){
                $pdf = $_GET["pdf"];
                if ($pdf == ""){
                    $pdf = "";
                }
            }
        }
    }    
    else{ 
        if ($pdf == ""){
            $pdf = "";
        }
        if(isset($_GET["pdf"])){ 
            $pdf = $_GET["pdf"];
            if ($pdf == ""){
                $pdf = "";
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
    
    <title>Tab</title>
    
</head>
<body>
    <?php
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$pdf);
    readfile("../assets/canciones/tabs/".$pdf);
    ?>
    
</body>
</html>