<?php
session_start();

if (isset($_GET['figura'])) {
    $_SESSION['figura'] = $_GET['figura'];
}

$figura = $_SESSION['figura'] ?? null;
if (!$figura) header("Location: ../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Introduce datos de la figura</title>
</head>
<body>
    

    <form method="GET" action="resultado.php">
        <?php
        switch ($figura) {
            case 'triangulo':
                echo '<label>Base:</label><input type="number" name="base" step="any" required><br>';
                echo '<label>Altura:</label><input type="number" name="altura" step="any" required><br>';
                echo '<label>Lado:</label><input type="number" name="lado" step="any" required><br>';
                break;
            case 'rectangulo':
                echo '<label>Base:</label><input type="number" name="base" step="any" required><br>';
                echo '<label>Altura:</label><input type="number" name="altura" step="any" required><br>';
                break;
            case 'cuadrado':
                echo '<label>Lado:</label><input type="number" name="lado" step="any" required><br>';
                break;
            case 'circulo':
                echo '<label>Radio:</label><input type="number" name="radio" step="any" required><br>';
                break;
        }
        ?>
        <button type="submit">Calcular</button>
    </form>

    <a href="../index.php">Volver atrás</a>
</body>
</html>
