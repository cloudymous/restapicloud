$('#search-button').on('click', function(){
    
    $.ajax({
        url : 'http://omdbapi.com',
        type : 'get',
        dataType : 'json',
        data : {
            'apikey' : 'eb343a33',
            's' : $('#search-input').val()
        },
        success : function(result){
            console.log(result);
        }
    });
});