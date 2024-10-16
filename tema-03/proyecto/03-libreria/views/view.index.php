<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.3 - CRUD Libros</title>

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
            
            <span class="fs-3"><i class="bi bi-rocket-takeoff-fill"></i> Proyecto 3.3 - CRUD Libros</span>
        </header>

        <!-- Tabla de información -->
        <legend>Tabla de libros</legend>


        <!-- Menu de alumnos -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ordenar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Ascendente</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Descendente</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Tabla de alumnos -->
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
                        <td><?= $valor["precio"] ?> </td>
                        <td><i class="bi bi-pencil"></i><i class="bi bi-trash"></i> </td>
                    </tr>
                <?php endforeach; ?>

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