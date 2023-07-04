<?php

    include __DIR__. '../partials/hotels.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>php-hotel</title>
    </head>
    <body>
        <?php foreach($hotels as $hotel){ ?>
            <div>
                <h2><?php echo $hotel['name']; ?></h2>
                <p><?php echo $hotel['description']; ?></p>
                <p>Parcheggio: <?php echo $hotel['parking'] ? 'Disponibile' : 'Non disponibile'; ?></p>
                <p>Voto: <?php echo $hotel['vote']; ?></p>
                <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</p>
            </div>
        <?php } ?>
    </body>
</html>