<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();
$id = $_GET['id'];
$query = $con->prepare("UPDATE productos SET activo=0 WHERE id=?");
$query->execute([$id]);
if ($query) {
    $correcto = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Procesado</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
<main class="container">
    <div class="row">
        <div class="col">
            <?php if($correcto){ ?>
                <h3 class="text-success">Producto Eliminado</h3>
            <?php } else { ?>
                <h 3class="text-danger">Error al procesar la petición</h3>
            <?php  } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="index.php" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</main>
</body>
</html>