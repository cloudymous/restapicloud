$.getJSON('https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=English%20Premier%20League', function(dataTeam){
    
    var team = dataTeam.teams;
    console.log(team);

    $.each(team, function(t, teams){
        $('#list-team').append(`
        <option value="`+ teams.idTeam+`">`+ teams.strTeam +`</option>
    `);

    });
});

$.getJSON('https://www.thesportsdb.com/api/v1/json/1/searchplayers.php?t=Chelsea', function(data){

    var player = data.player;
    console.log(player);

    $.each(player, function(i, data){
        $('#list-player').append(`
        <div class="col-sm-3">
            <div class="card mb-3">
                <img src="`+ data.strThumb +`" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">`+ data.strPlayer +`</h5>
                    <p class="card-text">`+ data.strPosition +`</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Nationality: `+ data.strNationality +`</li>
                <li class="list-group-item">Height: `+ data.strHeight +`</li>
                <li class="list-group-item">Signing: `+ data.strSigning +`</li>
                </ul>
                <div class="card-body">
                <a href="http://`+ data.strFacebook +`" class="card-link">Facebook</a>
                <a href="http://`+ data.strTwitter +`>" class="card-link">Twitter</a>
                </div>
            </div>
        </div>
        `);
    });
});