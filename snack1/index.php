<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
    [
        'casa' => 'Boston Celtic',
        'ospite' => 'Los Angeles Lakers',
        'score_casa' => '78',
        'score_ospite' => '110'
    ],
    
    [
        'casa' => 'Toronto Raptors',
        'ospite' => 'Houston Rockets',
        'score_casa' => '56',
        'score_ospite' => '89'
    ],
    
    [
        'casa' => 'Miami Heat',
        'ospite' => 'Dallav Mavericks',
        'score_casa' => '120',
        'score_ospite' => '85'
    ],
    
    [
        'casa' => 'San Antonio Spurs',
        'ospite' => 'Golden State Warriors',
        'score_casa' => '95',
        'score_ospite' => '135'
    ],
];?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Tournament</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <div class="matches">
        <?php for ($i = 0; $i < count($matches); $i++){ ?>
            <div class="match">
                <div class="home">
                    <h2><?php echo $matches[$i]['casa']?></h2>
                </div>
                <div class="score-home">
                    <h2><?php echo $matches[$i]['score_casa']?></h2>
                </div>
                <div class="score-away">
                    <h2><?php echo $matches[$i]['score_ospite']?></h2>
                </div>
                <div class="away">
                    <h2><?php echo $matches[$i]['ospite']?></h2>
                </div>
            </div>  
        <?php } ?>  
    </div>


</body>
</html>