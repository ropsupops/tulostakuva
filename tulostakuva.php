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
                    array(  "src"=>"/meme1.jpeg", 
                            "alt"=>"Mies ja perhonen",
                            "height"=>"600px",
                            "width"=>"600px"),
                    array(  "src"=>"/meme2.jpeg", 
                            "alt"=>"Yllättynyt Pikachu",
                            "height"=>"600px",
                            "width"=>"600px"),
                    array(  "src"=>"/meme3.jpeg", 
                            "alt"=>"Mahtava Shiba Inu",
                            "height"=>"600px",
                            "width"=>"600px"),
                    array(  "src"=>"/meme4.jpeg", 
                            "alt"=>"Pastakauhanaamio",
                            "height"=>"600px",
                            "width"=>"600px")
                    );


        $valinta = $kuvat[rand(0, count($kuvat) - 1)];
    ?>
    <h1>Päivitä sivu, jotta saat satunnaisen kuvan</h1>
    <img 
        src="<?php 
            echo $valinta["src"];
        ?>" 
        alt="<?php 
            echo $valinta["alt"];
            ?>" 
        height="<?php 
            echo $valinta["height"];
            ?>" 
        width="<?php 
            echo $valinta["width"];
            ?>"
    >
    <p>
        <?php 
            echo $valinta["alt"];
        ?>
    </p>
</body>
</html>