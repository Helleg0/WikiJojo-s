$(document).ready(function() {
    $('#tablaPersonajes').DataTable({
        "ajax": {
            "url": "backend/cargarInfoPersonaje.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "nombrePersonaje" },
            { "data": "meGusta" },
            { "data": "noMeGusta" }
        ],
    });
});