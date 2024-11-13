<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
    <title>Proyecto 4.1 CRUD - Artículos POO</title>

</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <!-- formulario -->
        <legend>CRUD - Artículos POO</legend>


        <!-- Menu de articulos -->
        <?php include 'views/partials/menu.php'; ?>


        <!-- Tabla de articulos -->
        <form>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Categorías</th>
                    <th>Unidades</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($tabla_articulos as $articulo): ?>
                    <tr>
                        <td><?= $articulo->getId() ?> </td>
                        <td><?= $articulo->getDescripcion() ?> </td>
                        <td><?= $articulo->getModelo() ?> </td>
                        <td><?= $articulo->getMarca() ?> </td>
                        <td><?= implode(', ', $articulo->getCategorias()) ?> </td>
                        <td><?= $articulo->getUnidades() ?> uds.</td>
                        <td><?= number_format($articulo->getPrecio(), 2, ',', '.') ?> € </td>

                        <!-- Botones de accion -->
                        <td>
                            <!-- Botón de eliminar -->
                            <a href="eliminar.php?id=<?= $articulo->getId() ?>" title="Eliminar"
                                onclick="return confirm('¿Confirmar eliminación del artículo?')"><i
                                    class="bi bi-trash-fill"></i></a>

                            <!-- Botón de editar -->
                            <a href="editar.php?id=<?= $articulo->getId() ?>" title="Editar"><i class="bi bi-pencil-fill"></i></a>

                            <!-- Botón de mostrar -->
                            <a href="mostrar.php?id=<?= $articulo->getId() ?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <p>Total de artículos: <?= count($tabla_articulos) ?></p>


        </form>

        <!-- fin del formulario -->

        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>