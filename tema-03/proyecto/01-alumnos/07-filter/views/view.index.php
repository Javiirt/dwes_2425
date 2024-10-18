<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
    <title>Proyecto 3.1 - CRUD Alumnos Array</title>
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <!-- Tabla de información -->
        <legend>Tabla de alumnos</legend>

        <!-- Menu de alumnos -->
        <?php include 'views/partials/menu_alumnos.php'; ?>


        <!-- Tabla de alumnos -->
        <form>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Población</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($alumnos as $valor): ?>
                    <tr>
                        <td><?= $valor["id"] ?> </td>
                        <td><?= $valor["nombre"] ?> </td>
                        <td><?= $valor["poblacion"] ?> </td>
                        <td><?= $valor["curso"] ?> </td>
                        <!-- Botones de accion -->
                        <td>
                            <!-- Botón de eliminar -->
                            <a href="delete.php?id=<?= $valor['id'] ?>" title="Eliminar"
                                onclick="return confirm('¿Confirmar eliminación del alumno?')"><i
                                    class="bi bi-trash-fill"></i></a>

                            <!-- Botón de editar -->
                            <a href="edit.php?id=<?= $valor['id'] ?>" title="Editar"><i class="bi bi-pencil-fill"></i></a>

                            <!-- Botón de mostrar -->
                            <a href="show.php?id=<?= $valor['id'] ?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <p>Total de alumnos: <?= count($alumnos) ?></p>
        </form>

        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>