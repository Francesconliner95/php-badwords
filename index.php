<?php

$paragrafo = "Cyberpunk 2077 è un videogioco di ruolo action-adventure, uscito il 10 dicembre del 2020, sviluppato da CD Projekt RED e pubblicato da CD Projekt per Xbox One, Microsoft Windows, PlayStation 4 e Google Stadia.Si tratta di un adattamento del gioco di ruolo Cyberpunk 2020 (1990). Inoltre, tutte le persone che hanno acquistato il gioco su Xbox One e PlayStation 4, possono giocarci rispettivamente su Xbox Series X e PlayStation 5 attraverso un aggiornamento gratuito.";

//localhost:8888/boolean/php-badwords/?badword=Xbox
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <section>
                <h2>Paragrafo iniziale:</h2>
                <p>
                    <?php
                    echo $paragrafo;
                    ?>
                </p>
            </section>
            <section>
                <h2>Lunghezza del paragrafo:</h2>
                <p>
                    <?php
                        echo strlen($paragrafo);
                    ?>
                </p>
            </section>
            <section>
                <h2>Paragrafo censurato:</h2>
                <p>
                    <?php
                        echo str_replace($_GET["badword"], '***', $paragrafo);
                    ?>
                </p>            
            </section>
        </div>
    </body>
</html>
