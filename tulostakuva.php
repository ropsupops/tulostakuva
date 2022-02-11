<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuvan tulostus</title>
</head>
<body>
    <?php
        $kuvat = array(
                    array(  "src"=>"./meme1", 
                            "alt"=>"Mies ja perhonen",
                            "height"=>"600px",
                            "widht"=>"600px"),
                    array(  "src"=>"./meme2", 
                            "alt"=>"Yllättynyt Pikachu",
                            "height"=>"600px",
                            "widht"=>"600px"),
                    array(  "src"=>"./meme3", 
                            "alt"=>"Mahtava Shiba Inu",
                            "height"=>"600px",
                            "widht"=>"600px"),
                    array(  "src"=>"./meme4", 
                            "alt"=>"Pastakauhanaamio",
                            "height"=>"600px",
                            "widht"=>"600px")
                    );
    ?>
    <h1>Päivitä sivu, jotta saat satunnaisen kuvan</h1>
    <img 
        src="<?php 
            echo "666";
        ?>" 
        alt="<?php 
            echo "666";
        ?>" 
        height="<?php 
            echo "666";
        ?>" 
        width="<?php 
            echo "666";
        ?>"
    >
    <p><?php ?></p>
</body>
</html>