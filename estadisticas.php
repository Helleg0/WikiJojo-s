<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Estadisticas</title>
            <link rel="stylesheet" href="assets/css/EstiloMenu.css">
            <link rel="stylesheet" href="assets/css/EstiloEstadisticas.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        </head>
      
        <nav>
            <a id="aEDIT" href="index.php" class = "amenu">Inicio</a>
            <a id="aEDIT" href="registrarP.php" class = "amenu">Registrar</a>
            <a id="aEDIT" href="estadisticas.php" class = "amenu">Estadísticas</a>
            <a id="aEDIT" href="eventos.php" class = "amenu">eventos</a>
            <div class="animation start-estadistica"></div>
        </nav>

        <body style="background-image: url('assets/img/5594016.jpg');">

            <h1>Tabla Likes y Dislikes Personajes</h1>
            <div class="block">
                <!-- INICIO TABLA -->
                <table id="tablaPersonajes" class="table text-dark" style="width:100% text-dark">
                    <thead id="fila">
                        <tr>
                            <th>Nombre</th>
                            <th>cantLikes</th>
                            <th>cantDislikes</th>
                        </tr>
                    </thead>
                </table>
                <!-- FIN INICIO TABLA -->
            </div>
        <br>

            <div class="containerI">
                <div class="row">
                    <!-- Gráficos Estadísticos -->
                    <div class="col-md-4">
                        <h2 class="text-center mb-2">Total Me Gusta</h2>
                        <canvas id="graficoMeGusta" width="150" height="150"></canvas>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center" style="color:black">VS</h1>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h2 class="text-center mb-2">Total No Me Gusta</h2>
                        <canvas id="graficoNoMeGusta" width="150" height="20"></canvas>
                    </div>
                     <!-- Fin Gráficos Estadísticos -->            
                </div>
            </div>
         

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
            <script src="assets/js/dataTable.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
            <script src="assets/js/estadisticas.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
        </body>

</html>