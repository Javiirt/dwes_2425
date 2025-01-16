<!doctype html>
<html lang="es">

<head>
    <?php require_once 'template/layouts/head.layout.php'; ?>
    <title><?= htmlspecialchars($this->title) ?> </title>
</head>

<body>
    <!-- Menú fijo superior -->
    <?php require_once 'template/partials/menu.partial.php'; ?>

    <!-- Capa Principal -->
    <div class="container">
        <br><br><br><br>

        <!-- Capa de mensajes -->
        <?php require_once 'template/partials/mensaje.partial.php'; ?>

        <!-- Capa de errores -->
        <?php require_once 'template/partials/error.partial.php'; ?>

        <!-- Estilo card de bootstrap -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><?= htmlspecialchars($this->title) ?></h5>
            </div>
            <div class="card-body">
                <!-- Formulario de alumnos -->
                <form action="<?= URL ?>alumno/create" method="POST">

                    <!-- Protección CSRF -->
                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>">

                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca un nombre"
                               value="<?= htmlspecialchars($this->alumno->nombre ?? '') ?>" required>

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['nombre'] ?? null ?>
                        </span>
                    </div>

                    <!-- Apellidos -->
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos"
                               placeholder="Introduzca apellidos"
                               value="<?= htmlspecialchars($this->alumno->apellidos ?? '') ?>" required>

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['apellidos'] ?? null ?>
                        </span>
                    </div>

                    <!-- Fecha de Nacimiento -->
                    <div class="mb-3">
                        <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fechaNac" id="fechaNac"
                               value="<?= htmlspecialchars($this->alumno->fechaNac ?? '') ?>" required>

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['fechaNac'] ?? null ?>
                        </span>
                    </div>

                    <!-- DNI -->
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" name="dni" id="dni" placeholder="12345678X"
                               value="<?= htmlspecialchars($this->alumno->dni ?? '') ?>" required
                               pattern="^[0-9]{8}[A-Za-z]{1}$" title="8 números y 1 letra">

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['dni'] ?? null ?>
                        </span>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email@ejemplo.es"
                               value="<?= htmlspecialchars($this->alumno->email ?? '') ?>" required>

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['email'] ?? null ?>
                        </span>
                    </div>

                    <!-- Teléfono -->
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="123456789"
                               value="<?= htmlspecialchars($this->alumno->telefono ?? '') ?>" required
                               title="9 números">

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['telefono'] ?? null ?>
                        </span>
                    </div>

                    <!-- Nacionalidad -->
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad"
                               placeholder="Introduzca nacionalidad"
                               value="<?= htmlspecialchars($this->alumno->nacionalidad ?? '') ?>">

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['nacionalidad'] ?? null ?>
                        </span>
                    </div>

                    <!-- Select Dinámico de Cursos -->
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" name="id_curso" id="id_curso" required>
                            <option selected disabled>Seleccione curso</option>
                            <?php foreach ($this->cursos as $indice => $data): ?>
                                <option value="<?= $indice ?>"
                                    <?= ($this->alumno->id_curso ?? '') == $indice ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($data) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <span class="form-text text-danger" role="alert">
                            <?= $this->error['id_curso'] ?? null ?>
                        </span>
                    </div>
            </div>

            <div class="card-footer">
                <!-- Botones de acción -->
                <a class="btn btn-secondary" href="<?= URL ?>alumno" role="button"
                   onclick="return confirm('¿Estás seguro de que deseas cancelar? Se eliminarán todos los datos')">Cancelar</a>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
        <br><br><br>
    </div>

    <!-- Pie de página -->
    <?php require_once 'template/partials/footer.partial.php'; ?>
    <?php require_once 'template/layouts/javascript.layout.php'; ?>

</body>

</html>
