<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2.2 Lanzamiento de proyectiles</title>

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
            <i class="bi bi-rocket-takeoff-fill"></i>
            <span class="fs-6">Proyecto 2.2 Lanzamiento de proyectiles </span>
        </header>

        <!-- Tabla de información -->
        <legend>Lanzamiento de proyectiles</legend>


        <table class="table">
            <tr>
                <th>Valores iniciales:</th>
            </tr>
            <tr>
                <td>Velocidad inicial:</td>
                <td><?= $velocidadInicial ?></td>
            </tr>
            <tr>
                <td>Ángulo de inclinación:</td>
                <td><?= $anguloInclinacion ?></td>
            </tr>

            <tr>
                <th>Resultados:</th>
            </tr>

            <tr>
                <td>Ángulos radianes:</td>
                <td><?= $angulosRadianes ?></td>
            </tr>
            <tr>
                <td>Velocidad inicial X:</td>
                <td><?= $velocidadX ?></td>
            </tr>
            <tr>
                <td>Velocidad inicial Y:</td>
                <td><?= $velocidadY ?></td>
            </tr>
            <tr>
                <td>Alcance máximo del proyectil:</td>
                <td><?= $alcance ?></td>
            </tr>
            <tr>
                <td>Tiempo de vuelo del proyectil:</td>
                <td><?= $tiempoVuelo ?></td>
            </tr>
            <tr>
                <td>Altura máxima del proyectil:</td>
                <td><?= $alturaMáxima ?></td>
            </tr>
        </table>
        <!-- botones de accion -->
        <button class="btn btn-primary" formaction="index.php" role="button">Volver</button>


        <!-- pie del documento -->
        <footer class="footer mt.auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">© 2024 Javier Rodríguez Torres - DWES - 2ºDAW - Curso 24/35</span>
            </div>
        </footer>


    </div>
    <!-- javascript bootstrap 533 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>