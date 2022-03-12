<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $url = "https://drive.google.com/file/d/1sE5ulZ6GRwwgEWKlJrlTCb6aN73b3aV_/view?usp=sharing";
        $findme2 = "view";
        $pos2 = strpos($url, $findme2);
        $url = substr($url,0, $pos2)."preview";
        echo $url;

    ?>
</body>
</html>