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
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$pdf);
    readfile("../assets/canciones/tabs/".$pdf);
    //echo '<iframe src="../assets/canciones/tabs/'.$pdf.'" style="width:100%; height:700px;" frameborder="0"></iframe>';
    //echo '<iframe src="../assets/canciones/tabs/'.$pdf.'" style="width:100vw; height:100vh;" frameborder="0" sandbox="allow-downloads"></iframe>';

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
    
    
</body>
</html>