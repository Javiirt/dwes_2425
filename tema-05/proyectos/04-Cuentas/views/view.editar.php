<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Editar Cuenta - GESBANK </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Editar Cuenta</legend>

        <!-- Formulario Nuevo Cuenta -->

        <form action="update.php?id=<?= $cuenta->id ?>" method="POST">

            <!-- id -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" step="1" value="<?= $cuenta->id ?>" disabled>
            </div>

            <!-- num_cuenta -->
            <div class="mb-3">
                <label for="num_cuenta" class="form-label">Número de cuenta</label>
                <input type="number" class="form-control" name="num_cuenta" step="1" value="<?= $cuenta->num_cuenta ?>"
                    required>
            </div>

            <!-- Select Dinámico clientes -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" name="id_cliente" required>
                    <option selected required>Seleccione cliente</option>
                    <!-- Editar lista cursos -->
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
                <input type="number" class="form-control" name="saldo" step="0.01" value="<?= $cuenta->saldo ?>"
                    required>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>

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