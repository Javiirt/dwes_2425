<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
    <title>Proyecto 4.1 CRUD - Artículos POO</title>

</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <!-- formulario -->
        <legend>Mostrar artículo</legend>



        <!-- Formulario -->
        <form>

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" value="<?= $articulo->getId() ?>" readonly>
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-3 row">
                <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDescripcion" value="<?= $articulo->getDescripcion() ?>" readonly>
                </div>
            </div>

            <!-- Modelo -->
            <div class="mb-3 row">
                <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputModelo" value="<?= $articulo->getModelo() ?>" readonly>
                </div>
            </div>

            <!-- Marca -->
            <div class="mb-3 row">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMarca" value="<?= $articulo->getMarca() ?>" readonly>
                </div>
            </div>


            <!-- Categorias -->
            <div class="mb-3 row">
                <label for="inputCategorias" class="col-sm-2 col-form-label">Categorias</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCategorias" value="<?= implode(', ', $articulo->getCategorias()) ?>" readonly>
                </div>
            </div>



            <!-- Unidades -->
            <div class="mb-3 row">
                <label for="inputUnidades" class="col-sm-2 col-form-label">Unidades</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUnidades" value="<?= $articulo->getUnidades() ?> uds." readonly>
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPrecio" value="<?= number_format($articulo->getPrecio(), 2, ',', '.') ?> €" readonly>
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
            </div>



        </form>

        <!-- fin del formulario -->

        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>