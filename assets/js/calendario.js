$(document).ready(function() {

    var agenda = document.getElementById("agenda");
    var calendario = new FullCalendar.Calendar(agenda, {
        initialView: 'dayGridMonth',
        selectable: true,
        eventSources: 'backend/obtenerEventos.php',
        dateClick: function(info) {
            var myModal = new bootstrap.Modal(document.getElementById('modalEvento'));
            $("#start").val(info.dateStr);
            $("#end").val(info.dateStr);
            myModal.show();

        },
        eventClick: function(info) {
            $('#id').val(info.event.id);
            $('#title').val(info.event.title);
            $('#description').val(info.event.extendedProps.description);
            $('#start').val(moment(info.event.start).format("YYYY-MM-DDThh:mm"));
            console.log(moment(info.event.start));
            $('#end').val(moment(info.event.end).format("YYYY-MM-DDThh:mm"));
            $('#color').val(info.event.backgroundColor);
            var myModal = new bootstrap.Modal(document.getElementById('modalEvento'));
            myModal.show();
        },
        editable: true,
    });
    calendario.render();

    $('#guardarEvento').click(function(evento) {
            var data = new FormData();
            id = $("#id").val();
            console.log(id);
            title = $("#title").val();
            console.log(title);
            description = $("#description").val();
            console.log(description);
            color = $("#color").val();
            console.log(color);
            start = $("#start").val();
            console.log(start);
            end = $("#end").val();
            console.log(end);
            data.append("id", id);
            data.append("title", title);
            data.append("description", description);
            data.append("color", color);
            data.append("start", start);
            data.append("end", end);
            console.log(id);
            if (id > 0) {
                url = "./backend/actualizarEvento.php";
            } else {
                url = "./backend/registrarEvento.php";
            }
            var ajax = new XMLHttpRequest();
            ajax.open("POST", url, true);
            ajax.onload = function(data) {
                var resp = JSON.parse(ajax.response);
                console.log(resp['status']);
                document.getElementById("form-eventos").reset();
                $("#modalEvento").modal('hide');
                location.reload();
            }
            ajax.send(data);
            evento.preventDefault();
        }

    )
});