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
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>
<body>
    

    <h2>Resultado - <?= ucfirst($figura) ?></h2>

    <?php
    switch ($figura) {
        case 'triangulo':
            echo "<p>Base: {$_SESSION['base']}</p>";
            echo "<p>Altura: {$_SESSION['altura']}</p>";
            echo "<p>Lado: {$_SESSION['lado']}</p>";
            break;
        case 'rectangulo':
            echo "<p>Base: {$_SESSION['base']}</p>";
            echo "<p>Altura: {$_SESSION['altura']}</p>";
            break;
        case 'cuadrado':
            echo "<p>Lado: {$_SESSION['lado']}</p>";
            break;
        case 'circulo':
            echo "<p>Radio: {$_SESSION['radio']}</p>";
            break;
    }

    echo "<hr>";
    echo "<p><strong>Área:</strong> " . round($obj->calcularArea(), 2) . "</p>";
    echo "<p><strong>Perímetro:</strong> " . round($obj->calcularPerimetro(), 2) . "</p>";
    ?>

    <a href="selecciona_lados.php?figura=<?= $figura ?>">Modificar datos</a> |
    <a href="../index.php">Elegir otra figura</a>
</body>
</html>
