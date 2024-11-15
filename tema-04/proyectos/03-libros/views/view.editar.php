<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Editar Libro - CRUD Libros </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Editar Libros</legend>

        <!-- Formulario Editar artículo -->

        <form action="update.php?indice=<?= $indice ?>" method="POST">

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value="<?= $libro->id?>" readonly>
            </div>

            <!-- Titulo -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo"  value="<?= $libro->titulo?>">
            </div>

            <!-- Autor -->
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor"  value="<?= $libro->autor?>">
            </div>

            <!-- editorial -->
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="editorial"  value="<?= $libro->editorial?>">
            </div>

            <!-- Fecha edición -->
            <div class="mb-3">
                <label for="fechaEdicion" class="form-label">Fecha de edición</label>
                <input type="text" class="form-control" name="fechaEdicion"  value="<?= $libro->fechaEdicion?>">
            </div>

            <!-- Select Dinámico materia -->
            <div class="mb-3">
                <label for="materia" class="form-label">Materia</label>
                <select class="form-select" name="materia" id="materia" >
                    <option selected disabled>Seleccione una materia</option>
                    <!-- mostrar lista materia -->
                    <?php foreach($materias as $indice => $data):?>
                        <option value="<?= $indice ?>" <?= ($libro->materia == $indice) ? 'selected': null ?>></option>
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
                            <input class="form-check-input" type="checkbox" name="etiquetas[]" value="<?= $indice ?>"
                            <?= (in_array($indice, $libro->etiquetas) ? 'checked' : null ) ?>>
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
                <input type="number" class="form-control" name="precio" step="0.01"  value="<?= $libro->precio?>">
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>

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