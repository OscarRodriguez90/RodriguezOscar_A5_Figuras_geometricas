<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tu CSS personalizado -->
  <link rel="stylesheet" href="./styles.css">

  <title>Selecciona una figura geométrica</title>
</head>
<body>

  <div class="container py-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
      <h1 class="text-center mb-4">Calculadora de Figuras Geométricas</h1>
      
      <form method="GET" action="views/selecciona_lados.php">
        <div class="mb-3">
          <label for="figura" class="form-label">Selecciona una figura:</label>
          <select name="figura" id="figura" class="form-select">
            <option value="">--Selecciona--</option>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="circulo">Círculo</option>
          </select>
        </div>
        
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Siguiente</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
