<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuvan tulostus</title>
    <style>
        html, body {
            width: 100%;
            height:100%;
            overflow: hidden;
        }

        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* ^^^ https://codepen.io/hylobates-lar/pen/qBbQeON ^^^ */

        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
        }

        #container{
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: 1fr 2fr 1fr;
            grid-template-areas:
            '. . .'
            '. main .'
            '. . .'
            ;
        }

        main{
            grid-area: main;
        }

        h1{
            font-weight: 900;
        }

        p{
            font-weight: 500;
        }

        button{
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php
        $kuvat = array(
                    array(  "src"=>"./meme1.jpeg", 
                            "alt"=>"Mies ja perhonen",
                            "height"=>"161px",
                            "width"=>"300px"),
                    array(  "src"=>"./meme2.jpg", 
                            "alt"=>"Yllättynyt Pikachu",
                            "height"=>"301px",
                            "width"=>"300px"),
                    array(  "src"=>"./meme3.jpeg", 
                            "alt"=>"Mahtava Shiba Inu",
                            "height"=>"168px",
                            "width"=>"300px"),
                    array(  "src"=>"./meme4.jpg", 
                            "alt"=>"Pastakauhanaamio",
                            "height"=>"301px",
                            "width"=>"300px")
                    );


        $valinta = $kuvat[rand(0, count($kuvat) - 1)];
    ?>
    <div id="container">
        <main>
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
        </main>
        <button onClick="window.location.reload();">
            <span class="material-icons-outlined">
            refresh</span>
        </button> 
    </div>
</body>
</html>