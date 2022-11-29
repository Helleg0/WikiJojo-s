// Gráfico total me gusta

$.get("./backend/obtenerVotos.php", {})
    .done(function(data) {
        var votos = $.parseJSON(data);
        var etiquetas = [];
        var votacionLike = [];
        var votacionDislike = [];
        $.each(votos, function(key, value) {
            etiquetas.push(votos[key].nombrePersonaje);
            votacionLike.push(votos[key].meGusta);
            votacionDislike.push(votos[key].noMeGusta);
        });

        graficoMeGusta(etiquetas, votacionLike);
        graficoNoMeGusta(etiquetas, votacionDislike);
    })

function graficoMeGusta(etiquetas, votacion) {
    const ctx = document.getElementById('graficoMeGusta').getContext('2d');
    const chartMeGusta = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: '# of Votes',
                data: votacion,
                backgroundColor: [
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB()
                ],
                borderColor: [
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB()
                ],
                borderWidth: 1,
                hoverOffset: 4
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}


function graficoNoMeGusta(etiquetas, votacion) {
    const ctx1 = document.getElementById('graficoNoMeGusta').getContext('2d');
    const graficoNoMeGusta = new Chart(ctx1, {
        type: 'doughnut',
        data: {
            labels: etiquetas,
            datasets: [{
                label: '# No me gusta',
                data: votacion,
                backgroundColor: [
                    colorRGB(),
                    colorRGB(),
                    colorRGB(),
                    colorRGB()
                ],
                hoverOffset: 4
            }]
        }
    })
};

function generarNumero(numero) {
    return (Math.random() * numero).toFixed(0);
}

function colorRGB() {
    var coolor = "(" + generarNumero(255) + "," + generarNumero(255) + "," + generarNumero(255) + ",0.5)";
    return "rgb" + coolor;
}