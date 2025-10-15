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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <script src="../validacion/validacion.js"></script>

    <title>Introduce datos de la figura</title>
</head>
<body>

    <div class="container py-5">
        <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
            <h1 class="text-center mb-4">Introduce los datos del <?= htmlspecialchars($figura) ?></h1>

            <form method="GET" action="resultado.php" >
                <?php
                switch ($figura) {
                    case 'triangulo':
                        echo '
                            <div class="mb-3">
                                <label class="form-label">Base:</label>
                                <input type="number" id="base" name="base" step="any" class="form-control" onblur="validarBase()">
                                <p id="error-base" class="text-danger"></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Altura:</label>
                                <input type="number" id="altura" name="altura" step="any" class="form-control" onblur="validarAltura()">
                                <p id="error-altura" class="text-danger"></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lado:</label>
                                <input type="number" id="lado" name="lado" step="any" class="form-control" onblur="validarLado()">
                                <p id="error-lado" class="text-danger"></p>
                            </div>';
                        break;

                    case 'rectangulo':
                        echo '
                            <div class="mb-3">
                                <label class="form-label">Base:</label>
                                <input type="number" name="base" id="base" step="any" class="form-control" onblur="validarBase()">
                                <p id="error-base" class="text-danger"></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Altura:</label>
                                <input type="number" id="altura" name="altura" step="any" class="form-control" onblur="validarAltura()">
                                <p id="error-altura" class="text-danger"></p>
                            </div>';
                        break;

                    case 'cuadrado':
                        echo '
                            <div class="mb-3">
                                <label class="form-label">Lado:</label>
                                <input type="number" id="lado" name="lado" step="any" class="form-control" onblur="validarLado()">
                                <p id="error-lado" class="text-danger"></p>
                            </div>';
                        break;

                    case 'circulo':
                        echo '
                            <div class="mb-3">
                                <label class="form-label">Radio:</label>
                                <input type="number" id="radio" name="radio" step="any" class="form-control" onblur="validarRadio()">
                                <p id="error-radio" class="text-danger"></p>
                            </div>';
                        break;
                }
                ?>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-success">Calcular</button>
                </div>
            </form>

            <div class="text-center">
                <a href="../index.php" class="btn btn-info">Volver atrás</a>
            </div>
        </div>
    </div>

</body>
</html>
