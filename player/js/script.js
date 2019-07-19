$.getJSON('player.json', function(data){
    let player = data.player;

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