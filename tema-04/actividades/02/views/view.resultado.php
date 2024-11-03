<!doctype html>
<html lang="en">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
    <title>Actividad 4.2 - Calculadora básica POO</title>
</head>

<body>
    <div class="container">
        <!-- cabecera del documento -->
        <?php include 'views/partials/header.php'; ?>

        <!-- formulario -->
        <legend>Calculadora básica POO</legend>


        <form>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor 1</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" value="<?= $calculadora->getValor1() ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor 2</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" value="<?= $calculadora->getValor2() ?>" readonly>
            </div>


            <!-- resultado -->
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><?= $calculadora->getOperador() ?></span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg" step="0.01" value="<?= $calculadora->getResultado() ?>" readonly>
            </div>
            <br>
            <!-- botones de accion -->
            <div class="btn_group" role="group">
                <button class="btn btn-primary" formaction="index.php" role="button">Volver</button>


            </div>

        </form>

        <!-- fin del formulario -->

        <!-- pie del documento -->
        <?php include 'views/partials/footer.php'; ?>


    </div>
    <!-- Javascript -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>