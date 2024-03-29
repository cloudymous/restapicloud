<?php
    // $playerData = file_get_contents('player.json');
    $playerData = file_get_contents('https://www.thesportsdb.com/api/v1/json/1/searchplayers.php?t=Chelsea');
    $player = json_decode($playerData, true);
    $player = $player["player"];

    $teamData = file_get_contents('https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=English%20Premier%20League');
    $team = json_decode($teamData, true);
    $team = $team["teams"];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Player List</title>
</head>

<body>

    <nav class="navbar navbar-light bg-dark mx-auto">
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>

    <div class="container">
    <select class="custom-select mt-5" id="list-team" style="width: 500px">
            <option selected>Open this select menu</option>
            <?php foreach($team as $teams) : ?>
            <option value="<?= $teams["idTeam"] ?>"><?= $teams["strTeam"] ?></option>
            <?php endforeach; ?>
        </select>
        <h1 class="font-weight-bold text-center mt-3 mb-2">Player List</h1>
        <div class="row">
            <?php foreach($player as $row) : ?>
            <div class="col-sm-3 style="max-width: 970px;">
                <div class="card mb-3">
                    <img src="<?= $row["strThumb"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row["strPlayer"] ?></h5>
                        <p class="card-text"><?= $row["strPosition"] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nationality: <?= $row["strNationality"] ?> </li>
                        <li class="list-group-item">Height: <?= $row["strHeight"] ?></li>
                        <li class="list-group-item">Signing: <?= $row["strSigning"] ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="http://<?= $row["strFacebook"] ?>" class="card-link">Facebook</a>
                        <a href="http://<?= $row["strTwitter"] ?>" class="card-link">Twitter</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>