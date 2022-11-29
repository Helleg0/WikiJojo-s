function registrarLikePersonaje(id){
    var datos = new FormData();
    datos.append("id", id);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "./backend/registroLike.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            console.log("Se registro el like")
        }
    }
    ajax.send(datos);
}

function registrarDisLikePersonaje(id){
    var datos = new FormData();
    datos.append("id", id);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "./backend/registroDislike.php", true)
    ajax.onload = function(event){
        var obj = JSON.parse(ajax.response);
        console.log(obj);
        if(obj.ok){
            console.log("Se registro el dislike")
        }
    }
    ajax.send(datos);
}

function confirmacionLike(id){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: '¿Desea confirmar el voto?',
        text: "No podrá cambiar su voto.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            '¡Correcto!',
            'Se ha registrado su voto.',
            'success'
          )
          registrarLikePersonaje(id);

        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            ':)',
            'error'
          )
        }
      })
}

function confirmacionDislike(id){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: '¿Desea confirmar el voto?',
        text: "No podrá cambiar su voto.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            '¡Correcto!',
            'Se ha registrado su voto.',
            'success'
          )
          registrarDisLikePersonaje(id);

        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            ':)',
            'error'
          )
        }
      })
}