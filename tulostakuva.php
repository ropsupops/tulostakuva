<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuvan tulostus</title>
    <style>
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        #container{
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: 1fr 2fr 1fr;
            grid-template-areas:
            '. . .'
            '. content .'
            '. . .'
            ;
        }
        #content{
            grid-area: content;
        }
        h1{
            font-weight: 900;
        }
        p{
            font-weight: 500;
        }
    </style>
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
                            "height"=>"301px",
                            "width"=>"300px"),
                    array(  "src"=>"/meme3.jpeg", 
                            "alt"=>"Mahtava Shiba Inu",
                            "height"=>"168px",
                            "width"=>"300px"),
                    array(  "src"=>"/meme4.jpg", 
                            "alt"=>"Pastakauhanaamio",
                            "height"=>"301px",
                            "width"=>"300px")
                    );


        $valinta = $kuvat[rand(0, count($kuvat) - 1)];
    ?>
    <div id="container">
        <div id="content">
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
        </div>    
    </div>
</body>
</html>