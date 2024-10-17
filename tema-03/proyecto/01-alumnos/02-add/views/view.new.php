<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1 - CRUD Alumnos Array</title>

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

            <span class="fs-3"><i class="bi bi-rocket-takeoff-fill"></i> Proyecto 3.1 - CRUD Alumnos Array</span>
        </header>

        <!-- Tabla de información -->
        <form action="create.php" method="POST">

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id">
                </div>
            </div>

            <!-- Nombre -->
            <div class="mb-3 row">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre" name="nombre">
                </div>
            </div>

            <!-- Población -->
            <div class="mb-3 row">
                <label for="inputPoblacion" class="col-sm-2 col-form-label">Poblacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacion">
                </div>
            </div>

            <!-- Curso -->
            <div class="mb-3 row">
                <label for="inputCurso" class="col-sm-2 col-form-label">Curso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCurso" name="curso">
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button class="btn btn-danger" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" formaction="create.php">Añadir</button>
            </div>



        </form>





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