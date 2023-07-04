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
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>Distanza dal centro (km)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel){ ?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php echo $hotel['parking'] ? 'Disponibile' : 'Non disponibile'; ?></td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>