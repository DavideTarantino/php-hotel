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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bool Va Go</title>
</head>
<body>
    <main>
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th class="fs-4" scope="col">Nome</th>
                    <th class="fs-4" scope="col">Descrizione</th>
                    <th class="fs-4" scope="col">Parcheggio</th>
                    <th class="fs-4" scope="col">Voto</th>
                    <th class="fs-4" scope="col">Distanza dal Centro</th>
                </tr>
            </thead>
            <?php foreach($hotels as $singleHotel): ?>
            <tbody>
                <tr>
                    <th scope="col">
                        <?= $singleHotel['name'] ?>
                    </th>
                    <th scope="col">
                        <?= $singleHotel['description'] ?>
                    </th>
                    <th scope="col">
                        <?= ($singleHotel['parking']== true) ? 'Si' : 'No' ?>
                    </th>
                    <th scope="col">
                        <?=  $singleHotel['vote'] ?>
                    </th>
                    <th scope="col">
                        <?= $singleHotel['distance_to_center'] ?>
                    </th>
                    
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>