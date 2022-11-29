<html>
    <head>
        <meta charset="utf-8">
        <title>Eventos</title>

        <link rel="stylesheet" href="assets/css/EstiloMenu.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">
        
    </head>

    <nav>
         <a id="aEDIT" href="index.php" class = "amenu">Inicio</a>
         <a id ="aEDIT" href="registrarP.php" class = "amenu">Registrar</a>
         <a id ="aEDIT" href="estadisticas.php" class = "amenu">Estadísticas</a>
         <a id ="aEDIT" href="eventos.php" class = "amenu">eventos</a>
         <div class="animation start-eventos"></div>
    </nav>

    <body style="background-image: url('assets/img/5594016.jpg');">
        <h1 class = "h1titloEvento">Eventos</h1>

            <div class="container">
                <div class="row">
                    <!-- Incio agenda -->
                    <div class="col-md-12">
                        <div id="agenda">
                        </div>
                    </div>
                    <!-- Fin Agenta -->            
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agenda Wiki Jojos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                            <div class="modal-body">

                                <form action="#" enctype="multipart/form-data" id = "form-eventos" name="form-eventos" method="POST">
                                    <input type="text" class="form-control" id="id" name="id" readonly>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Evento</label>
                                        <input type="text" class="form-control" id="title" placeholder="Título del evento">
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descripción</label>
                                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="start" class="form-label">Inicio</label>
                                        <input type="datetime-local" class="form-control" id="start" placeholder="Fecha de inicio">
                                    </div>

                                    <div class="mb-3">
                                        <label for="end" class="form-label">Fin</label>
                                        <input type="datetime-local" class="form-control" id="end" placeholder="Fecha de fin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="color" class="form-control" id="color" placeholder="Color del evento">
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="guardarEvento">Guardar</button>
                                <button type="button" class="btn btn-danger" id="eliminarEvento">Eliminar</button>
                            </div>
                    </div>
     
                </div>
            </div>
            <!-- Fin Modal -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.min.js"></script>
        <script src='assets/js/moment.js'></script>
        <script src="assets/js/calendario.js"></script>
    </body>




</html>