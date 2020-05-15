<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords C. Paiano</title>
</head>
<body>
    
    <?php
        $text = "Così come il macrocosmo si manifesta attraverso il flusso,
                l’energia e la struttura, anche nel microcosmo dell’uomo l’energia vitale (Prana) genera i Dosha,
                che sono tre forze fondamentali chiamate : Vata, Pitta e Kapha";
        $bad_word = $_GET["word"];
    ?>

    <p>Testo: <strong><?php echo $text ?></strong></p>
    <p>La lunghezza del testo è di <strong><?php echo strlen($text) ?></strong> caratteri</p>

    <?php 
    $replace = str_replace($bad_word,"***",$text);
    ?>

    <p>Testo con badword: <strong><?php echo $replace ?></strong></p>

</body>
</html>