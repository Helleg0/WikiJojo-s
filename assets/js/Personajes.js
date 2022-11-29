$(document).ready(function(){

    var tarjetas = $("#tarjetas");

    $.get("backend/cargarInfoPersonaje.php", {})
        .done(function(data){
            var personaje = $.parseJSON(data);
            console.log(personaje);
            $.each(personaje, function(key, value){                
                tarjetas.append(
                    
                        '<div id = card class="card">'+
                            '<h2 id = "nombre" class="nombre" name = "nombre">'+personaje[key].nombrePersonaje+'</h2>'+
                            '<img class="imgTarjeta" src="assets/img/upload/'+personaje[key].imagen+'" alt="'+personaje[key].imagen+'">'+
                            '<p class= "info">'+personaje[key].descripcion+'</p>'+
                            '<button id ="like" class="like" type="button" name="btn-like" onclick="confirmacionLike(' + personaje[key].idPersonaje + ');">Like👍</button>'+
                            '<button id="dislike" class="dislike" type="button" name="btn-dislike" onclick="confirmacionDislike(' + personaje[key].idPersonaje + ');">Dislike 👎</button>'+
                            
                        '</div>'
                    
                );
            })
        })
    
});

