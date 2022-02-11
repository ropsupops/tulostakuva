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
                            "height"=>"161px",
                            "width"=>"300px"),
                    array(  "src"=>"/meme2.jpg", 
                            "alt"=>"Yllättynyt Pikachu",
                            "height"=>"701px",
                            "width"=>"700px"),
                    array(  "src"=>"/meme3.jpeg", 
                            "alt"=>"Mahtava Shiba Inu",
                            "height"=>"168px",
                            "width"=>"300px"),
                    array(  "src"=>"/meme4.jpg", 
                            "alt"=>"Pastakauhanaamio",
                            "height"=>"1761px",
                            "width"=>"1242px")
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