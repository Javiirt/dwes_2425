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
        <legend>Editar artículo</legend>



        <!-- Formulario -->
        <form action="update.php?id=<?= $articulo->getId() ?>" method="POST">

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id" value="<?= $articulo->getId() ?>" readonly>
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-3 row">
                <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDescripcion" name="descripcion" value="<?= $articulo->getDescripcion() ?>" required>
                </div>
            </div>

            <!-- Modelo -->
            <div class="mb-3 row">
                <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputModelo" name="modelo" value="<?= $articulo->getModelo() ?>" required>
                </div>
            </div>

            <!-- Marca -->
            <div class="mb-3 row">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <select class="form-select" id="inputMarca" name='marca' required>
                        <?php foreach ($lista_marcas as $key => $marca): ?>
                            <option value="<?= $marca ?>" <?= $marca == $articulo->getMarca() ? 'selected' : '' ?>>

                                <?= $marca ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>


            <!-- Categorias -->
            <div class="mb-3 row">
                <label for="inputCategorias" class="col-sm-2 col-form-label">Categorias</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCategorias" name="categorias" value="<?= implode(', ', $articulo->getCategorias()) ?>" required>
                </div>
            </div>



            <!-- Unidades -->
            <div class="mb-3 row">
                <label for="inputUnidades" class="col-sm-2 col-form-label">Unidades</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUnidades" name="unidades" value="<?= $articulo->getUnidades() ?>" required>
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPrecio" name="precio" value="<?= $articulo->getPrecio() ?>" required>
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button class="btn btn-danger" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" formaction="update.php?id=<?= $articulo->getId() ?>">Actualizar</button>
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