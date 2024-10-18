<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html';?>
    <title>Proyecto 3.1 - CRUD Alumnos Array</title>
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <legend>Editar alumno</legend>

        <!-- Tabla de información -->
        <form action="update.php?id=<?= $registro["id"] ?>" method="POST">

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id" value="<?= $registro["id"] ?>" readonly>
                </div>
            </div>

            <!-- Nombre -->
            <div class="mb-3 row">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre" name="nombre" value="<?= $registro["nombre"] ?>">
                </div>
            </div>

            <!-- Población -->
            <div class="mb-3 row">
                <label for="inputPoblacion" class="col-sm-2 col-form-label">Poblacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacion" value="<?= $registro["poblacion"] ?>">
                </div>
            </div>

            <!-- Curso -->
            <div class="mb-3 row">
                <label for="inputCurso" class="col-sm-2 col-form-label">Curso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCurso" name="curso" value="<?= $registro["curso"] ?>">
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button class="btn btn-primary" type="submit" formaction="update.php">Actualizar</button>
            </div>



        </form>





        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html';?>
</body>

</html>