<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Mostrar Artículo - CRUD Artículos </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Editar Artículo</legend>

        <!-- Formulario Editar artículo -->

        <form >

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control"  value="<?= $articulo->getId() ?>" readonly>
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control"  value="<?= $articulo->getDescripcion() ?>" readonly>
            </div>

            <!-- Modelo -->
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control"  value="<?= $articulo->getModelo() ?>" readonly>
            </div>

            <!-- Select Dinámico Marcas -->
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <select class="form-select" disabled>
                    <option selected disabled>Seleccione una Marca</option>
                    <!-- mostrar lista marcas -->
                    <?php foreach($marcas as $indice => $data):?>
                        <option value="<?= $indice ?>" <?= ($articulo->getMarca() == $indice) ? 'selected': null ?>>
                            <?= $data ?>
                        </option>
                    <?php endforeach;?>
                </select>

            </div>

            <!-- Unidades -->
            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades</label>
                <input type="number" class="form-control" step="0.01" value="<?= $articulo->getUnidades() ?>" readonly >
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio (€)</label>
                <input type="number" class="form-control"  step="0.01" value="<?= $articulo->getPrecio() ?>" readonly>
            </div>

            <!-- lista checbox dinámica categorias -->
            <div class="mb-3">
                <label for="categorias" class="form-label">Seleccione las Categorías</label>
                <div class="form-control">
                    <!-- muestro el array categorías -->
                    <?php foreach($categorias as $indice => $data): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  value="<?= $indice ?>" disabled
                            <?= (in_array($indice, $articulo->getCategorias()) ? 'checked' : null ) ?>
                            >
                            <label class="form-check-label" for="">
                                <?= $data ?>
                            </label>
                        </div>
                    <?php endforeach; ?> 
                    
                </div>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>

        </form>

        <!-- Fin formulario nuevo artículo -->



    </div>
    <br><br><br>

    <!-- Pie del documento -->
    <?php include 'views/partials/partial.footer.php'; ?>

    <!-- Bootstrap Javascript y popper -->
    <?php include 'views/layouts/layout.javascript.html'; ?>


</body>

</html>