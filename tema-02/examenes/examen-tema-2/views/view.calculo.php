<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen tema 2</title>

    <!-- ccc bootstrap 533 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-arrow-clockwise"></i>
            <span class="fs-3">Examen Práctico Tema 2: Inserción de Código en Páginas Web </span>
        </header>


        <!-- Tabla de información -->
        <legend>Resultado de los cálculos</legend>

        <form>
            <table class="table">
                <tr>
                    <th>Valores iniciales</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Radio de la frecuencia</td>
                    <td><?= $radio ?> m</td>
                </tr>
                <tr>
                    <td>Frecuencia de rotación</td>
                    <td><?= $frecuencia ?> Hz</td>
                </tr>
                <tr>
                    <td>Masa del objeto</td>
                    <td><?= $masa ?> Kg</td>
                </tr>

                <tr>
                    <th>Cáculos</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Velocidad tangencial</td>
                    <td><?= $velocidadTangencial ?> m/s</td>
                </tr>
                <tr>
                    <td>Aceleración centrípeta</td>
                    <td><?= $aceleracionCentripeta ?> m/s^2</td>
                </tr>
                <tr>
                    <td>Fuerza centrípeta</td>
                    <td><?= $fuerzaCentripeta ?> N</td>
                </tr>
                <tr>
                    <td>Período</td>
                    <td><?= $periodo ?> s</td>
                </tr>
                
            </table>
            <!-- botones de accion -->
            <button class="btn btn-primary" formaction="index.php" role="button">Volver</button>
        </form>



        <!-- pie del documento -->
        <footer class="footer mt.auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">© 2024 Javier Rodríguez Torres - 2ºDAW - Curso 24/35</span>
            </div>
        </footer>


    </div>
    <!-- javascript bootstrap 533 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>