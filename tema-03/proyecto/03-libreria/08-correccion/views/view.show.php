<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html';?>
    <title>Proyecto 3.3 - CRUD Libros</title>
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <legend>Editar libro</legend>

        <!-- Tabla de información -->
        <form>

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id" value="<?= $registro["id"] ?>" readonly>
                </div>
            </div>

            <!-- Titulo -->
            <div class="mb-3 row">
                <label for="inputTitulo" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitulo" name="titulo" value="<?= $registro["titulo"] ?>" readonly>
                </div>
            </div>

            <!-- Autor -->
            <div class="mb-3 row">
                <label for="inputAutor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAutor" name="autor" value="<?= $registro["autor"] ?>" readonly>
                </div>
            </div>

            <!-- Editorial -->
            <div class="mb-3 row">
                <label for="inputEditorial" class="col-sm-2 col-form-label">Editorial</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEditorial" name="editorial" value="<?= $registro["editorial"] ?>" readonly>
                </div>
            </div>

            <!-- Genero -->
            <div class="mb-3 row">
                <label for="inputGenero" class="col-sm-2 col-form-label">Genero</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGenero" name="genero" value="<?= $registro["genero"] ?>" readonly>
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPrecio" name="precio" value="<?= $registro["precio"] ?>" readonly>
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
            </div>



        </form>





        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html';?>
</body>

</html>