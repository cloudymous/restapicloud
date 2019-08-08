$('#search-button').on('click', function() {

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : 'eb343a33',
            's' : $('#search-input').val()
        },
        success: function (result) {
           if (result.Response == "True"){
               console.log(result);
           } else {
               console.log("Error");
           }
        }
    });

});