<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Nuevo Libro - CRUD Libros </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Nuevo Libro</legend>

        <!-- Formulario Nuevo artículo -->

        <form action="create.php" method="POST">


            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" required>
            </div>

            <!-- Titulo -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <!-- Autor -->
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" required>
            </div>

            <!-- editorial -->
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial" required>
            </div>

            <!-- Fecha edición -->
            <div class="mb-3">
                <label for="fechaEdicion" class="form-label">Fecha de edición</label>
                <input type="text" class="form-control" name="fechaEdicion" required>
            </div>

            <!-- Select Dinámico materia -->
            <div class="mb-3">
                <label for="materia" class="form-label">Materia</label>
                <select class="form-select" name="materia" id="materia" required>
                    <option selected disabled>Seleccione una materia</option>
                    <!-- mostrar lista materia -->
                    <?php foreach($materias as $indice => $data):?>
                        <option value="<?= $indice ?>">
                            <?= $data ?>
                        </option>
                    <?php endforeach;?>
                </select>

            </div>

            

            <!-- lista checbox dinámica etiquetas -->
            <div class="mb-3">
                <label for="etiquetas" class="form-label">Seleccione las etiquetas</label>
                <div class="form-control">
                    <!-- muestro el array categorías -->
                    <?php foreach($etiquetas as $indice => $data): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="etiquetas[]" value="<?= $indice ?>" required>
                            <label class="form-check-label" >
                                <?= $data ?>
                            </label>
                        </div>
                    <?php endforeach; ?> 
                    
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio (€)</label>
                <input type="number" class="form-control" name="precio" step="0.01" required>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

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