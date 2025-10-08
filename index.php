

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles.css">
    <title>Selecciona una figura geométrica</title>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <form method="POST" action="public/selecciona_lados.php">
        <label for="figura">Selecciona una figura:</label>
        <select name="figura" id="figura" required>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="circulo">Círculo</option>
        </select>
        <button type="submit">Siguiente</button>
    </form>
</body>
</html>