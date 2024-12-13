<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>

<body>

    <header>
        <h1><?= $this->title; ?></h1>
    </header>

    <ul>
        <li><a href="https://www.google.com" target="_blank">Enlace 1</a></li>
        <li><a href="https://www.google.com" target="_blank">Enlace 2</a></li>
        <li><a href="https://www.google.com" target="_blank">Enlace 3</a></li>
    </ul>


    <main>
        <?=var_dump($this->alumnos->fettchAll()) ?>
    </main>

    <footer>
        <p>&#169 Javier Rodríguez Torres</p>
    </footer>

</body>

</html>