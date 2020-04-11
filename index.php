<?php
// 1 Initialiser CURL
$ch = curl_init();

// 2 Options :  
// URL to send in request => GET ALL CHARACTERS
curl_setopt($ch, CURLOPT_URL, "https://dragon-ball-api.herokuapp.com/api/character/");

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return instead of outputting directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Wether to include the header in the output. Set to false here
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3 Execute request and fetch the response / check for error
$results = json_decode(curl_exec($ch));
if ($results === false) {
    echo curl_error($ch);
}

// 4 Close free up the curl handle
curl_close($ch);

// 5 Display result
//print_r($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DRAGON BALL API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < count($results); $i++) { ?>
                <div class="col-4">
                    <div class="card my-4" style="width: 18rem;">
                        <img src="<?= $results[$i]->image ?>" class="card-img-top" alt="..." style="width : 286px; height: 200px;">
                        <div class="card-body">
                            <h4 class="card-title"><?= $results[$i]->species ?></h4>
                            <p class="card-text">Origin : <?= $results[$i]->originPlanet ?></p>
                            <p class="card-text">Status : <?= $results[$i]->status ?></p>
                            <p class="card-text">Species : <?= $results[$i]->species ?></p>
                            <p class="card-text">Series : <?= $results[$i]->series ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


    
