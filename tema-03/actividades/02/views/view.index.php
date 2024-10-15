<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 2- Tema 3 PHP</title>

    <!-- ccc bootstrap 533 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <span class="fs-3"><i class="bi bi-table"></i> Actividad 2 - Tema 3 PHP </span>
        </header>

        <!-- Tabla de información -->
        <legend>Tabla de multiplcar</legend>

        <form>
            <table class="table">
                <tr>
                    <!-- Primero hacemos un bucle para mostrar crear la cabecera de arriba -->
                    <th></th> 
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <th><?= $i ?></th>
                    <?php endfor; ?>
                </tr>

                <!-- Hacemos un bucle anidado para crear el resto de la tabla, multplicando índices -->
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <tr>
                        <th><?= $j ?> </th> <!-- Para mostrar una cabecera a un lado, mostramos el índice antes del bucle -->
                        <?php for ($k = 1; $k <= 10; $k++): ?>
                            <td><?= $j * $k ?> </td>

                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>

            </table>
        </form>

        <!-- pie del documento -->
        <footer class="footer mt.auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">© 2024 Javier Rodríguez Torres - DWES - 2ºDAW - Curso 24/35</span>
            </div>
        </footer>


    </div>
    <!-- javascript bootstrap 533 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>