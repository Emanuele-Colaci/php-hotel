<?php

    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

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