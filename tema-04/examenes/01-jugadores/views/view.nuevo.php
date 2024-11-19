<!DOCTYPE html>
<html lang="es">

<head>
    <!-- inclye head -->
    <?php include "views/layouts/layout.head.html"; ?>
    <title>Nuevo Jugador - CRUD Jugadores </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <!-- incluye header -->
        <?php include "views/partials/partial.header.php"; ?>

        <legend>Formulario Nuevo Jugador</legend>

        <!-- Formulario Nuevo libro -->

        <form action="create.php" method="POST">

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" required>
            </div>

            <!-- nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <!-- f_nacimiento -->
            <div class="mb-3">
                <label for="fecha_edicion" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento" required>
            </div>

            <!-- nacionalidad -->
            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" name="nacionalidad" required>
            </div>

            <!-- Nº Camiseta -->
            <div class="mb-3">
                <label for="num_camiseta" class="form-label">num_camiseta</label>
                <input type="number" class="form-control" name="numeroCamiseta" required>
            </div>

            <!-- altura -->
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m)</label>
                <input type="number" class="form-control" step="0.01" name="altura" required>
            </div>

            <!-- peso -->
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (Kg)</label>
                <input type="number" class="form-control" step="0.01" name="peso" required>
            </div>

            <!-- valor mercado -->
            <div class="mb-3">
                <label for="valor_mercado" class="form-label">Valor Mercado (€)</label>
                <input type="number" class="form-control" step="0.01" name="valor" required> 
            </div>

            <!-- Select Dinámico Equipo -->
            <div class="mb-3">
                <label for="equipo_id" class="form-label">Equipo</label>
                <select class="form-select" name="equipo" required>
                    <option selected disabled>Seleccione equipo</option>
                    <!-- mostrar lista equipos -->
                    <?php foreach ($lista_equipos as $key => $equipo): ?>
                        <option value="<?= $key ?>"><?= $equipo ?></option>
                    <?php endforeach; ?>

                </select>

            </div>

            <!-- lista checbox dinámica posiciones_id -->
            <div class="mb-3">
                <label for="posiciones_id" class="form-label">Posiciones de juego</label>
                <div class="form-control">
                    <!-- muestro el array posiciones -->
                    <?php foreach ($lista_posiciones as $key => $posicion): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $key ?>" name="posiciones[]">
                            <label class="form-check-label"><?= $posicion ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>

    <!-- Fin formulario nuevo jugador -->



    </div>
    <br><br><br>

    <!-- Pie del documento -->
    <!-- incluye footer -->
    <?php include "views/partials/partial.footer.php"; ?>

    <!-- Bootstrap Javascript y popper -->
    <!-- inclye javascript -->
    <?php include "views/layouts/layout.javascript.html"; ?>


</body>

</html>