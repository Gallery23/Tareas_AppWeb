<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>

<H1> Calculadora de Factorial </H1>
<?php
function calcularFactorial($numero) {
    if ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        return $numero * calcularFactorial($numero - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST["numero"]) ? intval($_POST["numero"]) : 0;

    if ($numero >= 0) {
        $resultado = calcularFactorial($numero);
        echo "<p>El factorial de $numero es: $resultado</p>";
    } else {
        echo "<p>Por favor, ingrese un número entero no negativo.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="numero">Ingrese un número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Calcular Factorial</button>
</form>

</body>
</html>
