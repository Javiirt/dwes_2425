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
            <span class="fs-6">Proyecto 2.2 - Lanzamiento de proyectiles </span>
        </header>

        <!-- formulario -->
        <legend>Lanzamiento de proyectiles</legend>


        <form method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Velocidad inicial</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="velocidad">
                </input>
                <br>
                <div id="passwordHelpBlock" class="form-text">Velocidad en m/s</div>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Angulo de lanzamiento</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="angulo">
                </input>
                <br>
                <div id="passwordHelpBlock" class="form-text">Ángulos en grados</div>
            </div>


            <!-- botones de accion -->
            <div class="btn_group" role="group">
                <button class="btn btn-secondary" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" formaction="calcular.php">Calcular</button>


            </div>

        </form>

        <!-- fin del formulario -->

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