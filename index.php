<?php
require 'function.php';

if (isset($_GET) && !empty($_GET['username'])) {
    $profile = getUserId($_GET['username']);
}

if (isset($_POST) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $feed = getFeed($id);
}

foreach($feeds as $feed){
    var_dump($feed);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STALK INSTA USER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="jumbotron">
            <div class="row">
                <div class="col-4">
                    <?php if(isset($profile) && !empty($profile)){ echo $profile; } ?>
                </div>
                <div class="col-8">
                    <form method="GET">
                        <div class="form-group">
                            <label for="username">USERNAME : </label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <?php if(isset($profile) && !empty($profile)){ ?>
            <div class="row">
                <div class="col-4">
                    <?php //if(isset($profile) && !empty($profile)){ echo $profile; } ?>
                </div>
                <div class="col-8">
                    <form method="POST">
                        <div class="form-group">
                            <label for="id">USER ID : </label>
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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