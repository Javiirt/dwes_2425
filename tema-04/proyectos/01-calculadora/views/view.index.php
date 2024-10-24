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


        <form method="GET" action="calculadora.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor 1</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Valor 2</span>
                <input type="number" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor2">
            </div>

            <!-- botones de accion -->
            <div class="btn_group" role="group">
                <button class="btn btn-secondary" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit" name="operacion" value="sumar">Suma</button>
                <button class="btn btn-primary" type="submit" name="operacion" value="restar">Resta</button>
                <button class="btn btn-primary" type="submit" name="operacion" value="dividir">División</button>
                <button class="btn btn-primary" type="submit" name="operacion" value="producto">Producto</button>
                <button class="btn btn-primary" type="submit" name="operacion" value="potencia">Potencia</button>


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