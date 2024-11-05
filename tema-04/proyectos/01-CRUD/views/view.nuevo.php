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
        <legend>Añadir artículo</legend>



        <!-- Formulario -->
        <form action="create.php" method="POST">

            <!-- ID -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputId" name="id" required>
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-3 row">
                <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDescripcion" name="descripcion" required>
                </div>
            </div>

            <!-- Modelo -->
            <div class="mb-3 row">
                <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputModelo" name="modelo" required>
                </div>
            </div>

            <!-- Marca -->
            <div class="mb-3 row">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <select class="form-select" id="inputMarca" name='marca' required>
                        <?php foreach ($lista_marcas as $key => $marca): ?>
                            <option value="<?= $marca ?>"><?= $marca ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>


            <!-- Categorias -->
            <div class="mb-3 row">
                <label for="inputCategorias" class="col-sm-2 col-form-label">Categorias</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCategorias" name="categorias" required>
                </div>
            </div>



            <!-- Unidades -->
            <div class="mb-3 row">
                <label for="inputUnidades" class="col-sm-2 col-form-label">Unidades</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUnidades" name="unidades" required>
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPrecio" name="precio" required>
                </div>
            </div>


            <!-- Botones de acción -->
            <div class="btn_group" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button class="btn btn-danger" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" formaction="create.php">Añadir</button>
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