<!doctype html>
<html lang="es">

<head>
    <?php require_once 'template/layouts/head.layout.php'; ?>
    <title><?= $this->title ?> </title>
</head>

<body>
    <!-- Menú fijo superior -->
    <?php require_once 'template/partials/menu.auth.partial.php' ?>

    <!-- Capa Principal -->
    <div class="container">
        <br><br><br><br>

        <!-- capa de mensajes -->
        <?php require_once 'template/partials/mensaje.partial.php' ?>

        <!-- capa errores -->
        <?php require_once 'template/partials/error.partial.php' ?>

        <!-- Estilo card de bootstrap -->
        <div class="card">
            <div class="card-header">
                <!-- Protección ataques XSS -->
                <h5 class="card-title"><?= htmlspecialchars($this->title) ?></h5>
            </div>
            <div class="card-body">
                <!-- Formulario de albumes  -->
                <form>

                    <!-- protección CSRF -->
                    <input type="hidden" name="csrf_token"
                        value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>">


                    <!-- tabla para mostrar los datos -->

                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Título</th>
                                <td><?= $this->album->titulo ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Descripción</th>
                                <td><?= $this->album->descripcion ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Autor</th>
                                <td><?= $this->album->autor ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha</th>
                                <td><?= $this->album->fecha ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Lugar</th>
                                <td><?= $this->album->lugar ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Categorias</th>
                                <td><?= $this->categorias[$this->album->id_categoria] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Etiquetas</th>
                                <td><?= $this->album->etiquetas ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nº fotos</th>
                                <td><?= $this->album->num_fotos ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nº visitas</th>
                                <td><?= $this->album->num_visitas ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Carpeta</th>
                                <td><?= $this->album->carpeta ?></td>
                            </tr>


                        </tbody>
                    </table>



                    <!-- Imágenes -->

                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <?php $contador = 0; ?>
                            <?php foreach (glob("images/" . $this->album->carpeta . "/*") as $imagen): ?>
                                <button type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide-to="<?= $contador ?>" <?= ($contador == 0) ? 'class="active" aria-current="true"' : null ?> aria-label="Slide <?= $contador ?>"></button>
                                <?php $contador++; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="carousel-inner">
                            <!-- Recorremos todas las imagenes -->
                            <?php $contador = 0; ?>
                            <?php foreach (glob("images/" . $this->album->carpeta . "/*") as $imagen): ?>
                                <!-- Si es la primera, la ponemos activa -->
                                <div class="carousel-item <?= ($contador == 0) ? 'active' : '' ?>" data-bs-interval="5000">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img src="<?= URL . $imagen ?>" class="d-block"
                                            style="height: 500px; object-fit: cover;" alt="...">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                            <?= $this->album->titulo ?>
                                        </h5>
                                        <p class="text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                            <?= $this->album->fecha ?>
                                        </p>
                                    </div>
                                </div>
                                <?php $contador++; ?>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </form> <!-- Fin del formulario -->

            </div>

            <div class="card-footer">
                <!-- botones de acción -->
                <a class="btn btn-secondary" href="<?= URL ?>album" role="button">Volver</a>
            </div>

        </div>
        <br><br><br>
    </div>

    <!-- /.container -->

    <?php require_once 'template/partials/footer.partial.php' ?>
    <?php require_once 'template/layouts/javascript.layout.php' ?>

</body>

</html>