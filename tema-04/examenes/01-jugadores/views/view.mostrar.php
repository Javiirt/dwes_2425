<!DOCTYPE html>
<html lang="es">

<head>
    <!-- inclye head -->
    <?php include "views/layouts/layout.head.html"; ?>
    <title>Mostrar Jugador - CRUD Jugadores </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <!-- incluye header -->
        <?php include "views/partials/partial.header.php"; ?>

        <legend>Formulario Mostrar Jugador</legend>

        <!-- Formulario Mostrar libro -->

        <form action="create.php" method="POST">

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" value="<?= $jugador->id ?>" disabled>
            </div>

            <!-- nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" value="<?= $jugador->nombre ?>" disabled>
            </div>

            <!-- f_nacimiento -->
            <div class="mb-3">
                <label for="fecha_edicion" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" value="<?= $jugador->f_nacimiento ?>" disabled>
            </div>

            <!-- nacionalidad -->
            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" value="<?= $jugador->nacionalidad ?>" disabled>
            </div>

            <!-- Nº Camiseta -->
            <div class="mb-3">
                <label for="num_camiseta" class="form-label">num_camiseta</label>
                <input type="number" class="form-control" value="<?= $jugador->num_camiseta ?>" disabled>
            </div>

            <!-- altura -->
            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m)</label>
                <input type="number" class="form-control" step="0.01" value="<?= $jugador->altura ?>" disabled>
            </div>

            <!-- peso -->
            <div class="mb-3">
                <label for="peso" class="form-label">Peso (Kg)</label>
                <input type="number" class="form-control" step="0.01" value="<?= $jugador->peso ?>" disabled>
            </div>

            <!-- valor mercado -->
            <div class="mb-3">
                <label for="valor_mercado" class="form-label">Valor Mercado (€)</label>
                <input type="number" class="form-control" step="0.01" value="<?= $jugador->valor_mercado ?>" disabled>
            </div>

            <!-- Select Dinámico Equipo -->
            <div class="mb-3">
                <label for="valor_mercado" class="form-label">Equipo</label>
                <input type="text" class="form-control"  value="<?= $lista_equipos[$jugador->equipo_id] ?>" disabled>
            </div>

            <!-- lista checbox dinámica posiciones_id -->
            <div class="mb-3">
                <label for="valor_mercado" class="form-label">Posiciones</label>
                <input type="text" class="form-control"  value="<?= implode(', ', $obj_tabla_jugadores->mostrar_nombre_posiciones($jugador->posiciones_id)) ?>" disabled>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
    </div>
    </form>

    <!-- Fin formulario Mostrar jugador -->



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