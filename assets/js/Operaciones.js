/*    Swal.fire({
        position: 'center',
        imageUrl:"assets/img/loading.png",
        title: 'Cargando',
        showConfirmButton: false,
        allowOutsideClick: false,
        timer: 1000
      })


function sumarLikeJotaro(){
    if(localStorage.getItem("LikeJotaroKujo")){
        var likesJotaro = parseInt(localStorage.getItem("LikeJotaroKujo"))+1;
        localStorage.setItem("LikeJotaroKujo", likesJotaro)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("LikeJotaroKujo", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}
var totalSumaLikesJotaro = document.getElementById("LikesJotaroKujo");
 totalSumaLikesJotaro.innerHTML = localStorage.getItem("LikeJotaroKujo");

function sumarDislikeJotaro(){
    if(localStorage.getItem("DislikeJotaroKujo")){
        var dislikesJotaro = parseInt(localStorage.getItem("DislikeJotaroKujo"))+1;
        localStorage.setItem("DislikeJotaroKujo", dislikesJotaro)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("DislikeJotaroKujo", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaDislikesJotaro = document.getElementById("DislikesJotaroKujo");
totalSumaDislikesJotaro.innerHTML = localStorage.getItem("DislikeJotaroKujo");
 
var resultTotalVotosJotaro = totalSumaLikesJotaro + totalSumaDislikesJotaro;
 
function sumarLikeLisa(){
    if(localStorage.getItem("LikeLisaLisa")){
        var likesLisa = parseInt(localStorage.getItem("LikeLisaLisa"))+1;
        localStorage.setItem("LikeLisaLisa", likesLisa)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("LikeLisaLisa", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaLikesLisa = document.getElementById("LikesLisa");
totalSumaLikesLisa.innerHTML= localStorage.getItem("LikeLisaLisa");

function sumarDislikeLisa(){
    if(localStorage.getItem("DislikeLisa")){
        var dislikesLisa = parseInt(localStorage.getItem("DislikeLisa"))+1;
        localStorage.setItem("DislikeLisa", dislikesLisa)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("DislikeLisa", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaDislikesLisa = document.getElementById("DislikesLisa");
totalSumaDislikesLisa.innerHTML= localStorage.getItem("DislikeLisa");

var resultTotalVotosLisa = totalSumaLikesLisa + totalSumaDislikesLisa;

function sumarLikeJoseph(){
    if(localStorage.getItem("LikeJoseph")){
        var likesJoseph = parseInt(localStorage.getItem("LikeJoseph"))+1;
        localStorage.setItem("LikeJoseph", likesJoseph)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("LikeJoseph", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaLikesJoseph = document.getElementById("LikesJosephJoestar");
totalSumaLikesJoseph.innerHTML = localStorage.getItem("LikeJoseph")

function sumarDislikeJoseph(){
    if(localStorage.getItem("DislikeJoseph")){
        dislikesJoseph = parseInt(localStorage.getItem("DislikeJoseph"))+1;
        localStorage.setItem("DislikeJoseph", dislikesJoseph)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("DislikeJoseph", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumasDislikesJoseph = document.getElementById("DislikesJosehpJoestar");
totalSumasDislikesJoseph.innerHTML= localStorage.getItem("DislikeJoseph");

var resultTotalVotosJoseph = totalSumaLikesJoseph + totalSumasDislikesJoseph;


function sumarLikeDio(){
    if(localStorage.getItem("LikeDio")){
        var likesDio = parseInt(localStorage.getItem("LikeDio"))+1;
        localStorage.setItem("LikeDio", likesDio)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("LikeDio", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaLikesDio = document.getElementById("LikesDioBrando");
totalSumaLikesDio.innerHTML =localStorage.getItem("LikeDio")

function sumarDislikeDio(){
    if(localStorage.getItem("DislikeDio")){
        dislikesDio = parseInt(localStorage.getItem("DislikeDio"))+1;
        localStorage.setItem("DislikeDio", dislikesDio)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        localStorage.setItem("DislikeDio", 1)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Su voto se ha registrado correctamente.',
            showConfirmButton: false,
            timer: 1500
          })
    }
}

var totalSumaDislikesDio = document.getElementById("DislikesDioBrando");
totalSumaDislikesDio.innerHTML = localStorage.getItem("DislikeDio");

var resultTotalVotosDio = totalSumaLikesDio + totalSumaDislikesDio;
*/

