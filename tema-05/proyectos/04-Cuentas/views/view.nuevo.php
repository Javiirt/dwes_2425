<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/layout.head.html'; ?>
    <title>Nueva Cuenta - GESBANK </title>
</head>

<body>
    <!-- Capa Principal -->
    <div class="container">

        <!-- Encabezado proyecto -->
        <?php include 'views/partials/partial.header.php'; ?>

        <legend>Formulario Nueva Cuenta</legend>

        <!-- Formulario Nuevo Cuenta -->

        <form action="create.php" method="POST">

            <!-- num_cuenta -->
            <div class="mb-3">
                <label for="num_cuenta" class="form-label">Número de cuenta</label>
                <input type="number" class="form-control" name="num_cuenta" step="1" required>
            </div>

            <!-- Select Dinámico clientes -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" name="id_cliente" required>
                    <option selected disabled>Seleccione cliente</option>
                    <!-- mostrar lista cursos -->
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente->id ?>">
                            <?= $cliente->cliente ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- saldo -->
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" name="saldo" step="0.01" required>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

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