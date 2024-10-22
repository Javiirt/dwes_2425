<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
    <title>Proyecto 3.3 - CRUD Libros</title>
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <!-- Tabla de información -->
        <legend>Tabla de libros</legend>

        <!-- Menu de libros -->
        <?php include 'views/partials/menu.php'; ?>


        <!-- Tabla de libros -->
        <form>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Género</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($libros as $valor): ?>
                    <tr>
                        <td><?= $valor["id"] ?> </td>
                        <td><?= $valor["titulo"] ?> </td>
                        <td><?= $valor["autor"] ?> </td>
                        <td><?= $valor["editorial"] ?> </td>
                        <td><?= $valor["genero"] ?> </td>
                        <td><?= number_format($valor["precio"],2, ',','.') ?> € </td>
                        <!-- Botones de accion -->
                        <td>
                            <!-- Botón de eliminar -->
                            <a href="delete.php?id=<?= $valor['id'] ?>" title="Eliminar"
                                onclick="return confirm('¿Confirmar eliminación del libro?')"><i
                                    class="bi bi-trash-fill"></i></a>

                            <!-- Botón de editar -->
                            <a href="edit.php?id=<?= $valor['id'] ?>" title="Editar"><i class="bi bi-pencil-fill"></i></a>

                            <!-- Botón de mostrar -->
                            <a href="show.php?id=<?= $valor['id'] ?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <p>Total de libros: <?= count($libros) ?></p>
        </form>

        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>