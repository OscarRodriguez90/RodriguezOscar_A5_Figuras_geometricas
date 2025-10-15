<?php
session_start();

require_once '../clases/Triangulo.php';
require_once '../clases/Rectangulo.php';
require_once '../clases/Cuadrado.php';
require_once '../clases/Circulo.php';

$figura = $_SESSION['figura'] ?? null;
if (!$figura) header("Location: ../index.php");

// Guardamos los datos del formulario GET en sesión
foreach ($_GET as $k => $v) {
    $_SESSION[$k] = $v;
}

switch ($figura) {
    case 'triangulo':
        $obj = new Triangulo($_SESSION['base'], $_SESSION['altura'], $_SESSION['lado']);
        break;
    case 'rectangulo':
        $obj = new Rectangulo($_SESSION['base'], $_SESSION['altura']);
        break;
    case 'cuadrado':
        $obj = new Cuadrado($_SESSION['lado']);
        break;
    case 'circulo':
        $obj = new Circulo($_SESSION['radio']);
        break;
    default:
        die("Figura no válida");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="../styles.css">

    <title>Resultado</title>
</head>
<body>

    <div class="container py-5">
        <div class="card shadow p-4 mx-auto" style="max-width: 600px;">
            <h2 class="text-center mb-4">Resultado - <?= ucfirst($figura) ?></h2>

            <div class="mb-3">
                <?php
                switch ($figura) {
                    case 'triangulo':
                        echo "<p class='mb-2'>Base: <strong>{$_SESSION['base']}</strong></p>";
                        echo "<p class='mb-2'>Altura: <strong>{$_SESSION['altura']}</strong></p>";
                        echo "<p class='mb-2'>Lado: <strong>{$_SESSION['lado']}</strong></p>";
                        break;
                    case 'rectangulo':
                        echo "<p class='mb-2'>Base: <strong>{$_SESSION['base']}</strong></p>";
                        echo "<p class='mb-2'>Altura: <strong>{$_SESSION['altura']}</strong></p>";
                        break;
                    case 'cuadrado':
                        echo "<p class='mb-2'>Lado: <strong>{$_SESSION['lado']}</strong></p>";
                        break;
                    case 'circulo':
                        echo "<p class='mb-2'>Radio: <strong>{$_SESSION['radio']}</strong></p>";
                        break;
                }

                echo "<hr>";
                echo "<p class='mb-2'><strong>Área:</strong> " . round($obj->calcularArea(), 2) . "</p>";
                echo "<p class='mb-3'><strong>Perímetro:</strong> " . round($obj->calcularPerimetro(), 2) . "</p>";
                ?>
            </div>

            <div class="d-flex justify-content-between">
                <a href="selecciona_lados.php?figura=<?= $figura ?>" class="btn btn-primary">Modificar datos</a>
                <a href="../index.php" class="btn btn-outline-secondary">Elegir otra figura</a>
            </div>
        </div>
    </div>

</body>
</html>
