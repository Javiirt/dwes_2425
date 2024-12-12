<?php 

/*
class Class_conexion
{

    // objeto de la clase pdo
    public $pdo;

    public function __construct()
    {
        try {

            // nombre fuente de datos
            $dsn = "mysql:host=" . SERVER . ";dbname=" . BD;

            // array de opciones para la clase pdo
            $options = [

                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . CHARSET . " COLLATE " . COLLECTION

            ];

            // realizo la conexión
            $this->pdo = new PDO($dsn, USER, PASS, $options);
        } catch (PDOException $e) {

            // error de  base dedatos
            include 'views/partials/errorDB.php';

            // cierro conexión
            $this->pdo = null;

            // cancelo ejecución programa
            exit();
        }
    }
}



            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" name="id_cliente" required>
                    <option selected required>Seleccione cliente</option>
                    
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente->id ?>" <?= ($cliente->id == $cuenta->id_cliente) ? 'selected' : null ?>>
                            <?= $cliente->cliente ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" name="saldo" step="0.01" value="<?= $cuenta->saldo ?>"
                    required>
            </div>


            # Archivos de configuración
include 'config/configDB.php';

# Clases
include 'class/class.cuenta.php';
include 'class/class.conexion.php';
include 'class/class.tabla_cuentas.php';

# Librerias

# Model
include 'models/model.eliminar.php';


# Redirecciono  controlador index
header("location: index.php");


public function edad()
    {
        $fechaActual = new DateTime(); // Fecha actual
        $fechaNacimiento = new DateTime($this->fechaNac); // Fecha de nacimiento
        $edad = $fechaNacimiento->diff($fechaActual); // Diferencia entre las fechas
        return $edad->y; // Devuelve solo los años

    }

    date('d/m/Y' , strtotime($cuenta->fecha_alta))
*/