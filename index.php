<?php

    include __DIR__. '../partials/hotels.php';

    // FILTRA GLI HOTEL IN BASE ALLA RICHIESTA GET
    $filteredHotels = [];
    $minVote = isset($_GET['min_vote']) ? $_GET['min_vote'] : null;

    foreach($hotels as $hotel){
        $addHotel = true;

        if(isset($_GET['parking']) && $_GET['parking'] === '1'){
            if(!$hotel['parking']){
                $addHotel = false;
            }
        }

        if($minVote !== null && $hotel['vote'] < $minVote){
            $addHotel = false;
        }

        if($addHotel){
            $filteredHotels[] = $hotel;
        }
    }

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
            <h1>Filtra Hotel</h1>
            <form action="" method="GET">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="parking" value="1">
                    <label>
                        Mostra solo hotel con parcheggio
                    </label>
                </div>
                <div class="mb-3">
                    <label>
                        Voto minimo
                    </label>
                    <input type="number" min="0" max="5" class="form-control" name="min_vote" placeholder="Inserisci il voto minimo">
                </div>
                <input type="submit" class="btn btn-primary mt-3 mb-3" value="Filtra">
            </form>

            <hr>

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
                    <?php foreach($filteredHotels as $hotel){ ?>
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