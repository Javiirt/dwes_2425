<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Editar Profesor - CRUD Profesors </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Editar Profesor</legend>

        <!-- Formulario Editar artículo -->

        <form action="update.php?indice=<?= $id ?>" method="POST">


            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $profesor->id ?>" required>
            </div>

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $profesor->nombre ?>" required>
            </div>

            <!-- Apellidos -->
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $profesor->apellidos ?>" required>
            </div>

            <!-- NRP -->
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $profesor->nrp ?>" required>
            </div>

            <!-- Fecha nacimiento -->
            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?= $profesor->fecha_nacimiento ?>" required>
            </div>

            <!-- Población -->
            <div class="mb-3">
                <label for="poblacion" class="form-label">Población</label>
                <input type="text" class="form-control" id="poblacion" name="poblacion" value="<?= $profesor->poblacion ?>" required>
            </div>

            <!-- Especialildad -->
            <div class="mb-3">
                <label class="form-label">Especialidad</label>
                <select class="form-select" name="especialidad" required>
                    <option selected disabled>Seleccionar especialidad</option>
                    <?php foreach ($lista_especialidades as $key => $value): ?>
                        <option value="<?= $key ?>" <?= ($key == $profesor->especialidad) ? 'selected' :  '' ?>>
                            <?= $value ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <!-- Asignaturas -->
            <div class="mb-3">
                <label class="form-label">Asignaturas</label>
                <div class="form-form">
                    <?php foreach ($lista_asignaturas  as $key => $value): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $key ?>" name="asignaturas[]"
                                <?= (in_array($key, $profesor->asignaturas)) ? 'checked' : '' ?>>
                            <label class="form-check-label"><?= $value ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- botones de acción -->
            <br><br>
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>

        <!-- Fin formulario Editar artículo -->



    </div>
    <br><br><br>

    <!-- Pie del documento -->
    <?php include 'views/partials/partial.footer.php'; ?>

    <!-- Bootstrap Javascript y popper -->
    <?php include 'views/layouts/layout.javascript.html'; ?>


</body>

</html>