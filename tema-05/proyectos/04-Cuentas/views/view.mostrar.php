<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Mostrar Cuenta - GESBANK </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Mostrar Cuenta</legend>

        <!-- Formulario Nuevo Cuenta -->

        <form action="create.php" method="POST">

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" step="1" value="<?= $cuenta->id ?>" disabled>
            </div>

            <!-- num_cuenta -->
            <div class="mb-3">
                <label for="num_cuenta" class="form-label">Número de cuenta</label>
                <input type="number" class="form-control" step="1" value="<?= $cuenta->num_cuenta ?>" disabled>
            </div>

            <!-- Select Dinámico clientes -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" disabled>
                    <option selected disabled>Seleccione cliente</option>
                    <!-- mostrar lista cursos -->
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente->id ?>" <?= ($cliente->id == $cuenta->id_cliente) ? 'selected' : null ?>>
                            <?= $cliente->cliente ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- saldo -->
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" step="0.01" value="<?= $cuenta->saldo ?>" disabled>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>

        </form>
        <!-- Fin formulario nuevo Cuenta -->
    </div>
    <br><br><br>

    <!-- Pie del documento -->
    <?php include 'views/partials/partial.footer.php'; ?>

    <!-- Bootstrap Javascript y popper -->
    <?php include 'views/layouts/layout.javascript.html'; ?>


</body>

</html>