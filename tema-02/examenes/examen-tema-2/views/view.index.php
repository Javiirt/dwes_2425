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


        <!-- inicio del formulario -->
        <form method="POST">

            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Radio de la frecuencia</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="radio">

            </div>
            <div class="form-text">Valor almacenado en metros (m)</div>

            <br>

            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Frecuencia de rotación</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="frecuencia">
            </div>
            <div class="form-text">Valor almacenado en hercios (Hz)</div>

            <br>

            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default">Masa del objeto</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="masa">
            </div>
            <div class="form-text">Valor almacenado en kilogramos (Kg)</div>

            <br>

            <!-- botones de accion -->
            <div class="btn_group" role="group">
                <button class="btn btn-secondary" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" formaction="calcular.php">Calcular</button>


            </div>

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