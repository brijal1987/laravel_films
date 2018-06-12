function loadFilms(){
	$.ajax({
        type: "GET",
        url: 'api/films',
        data: {},
        success: function( msg ) {console.log(msg.data)
            $("#filmList").append("<div>"+msg+"</div>");
        }
    });
	}