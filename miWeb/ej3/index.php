<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero1" placeholder="Introduce el primer número">
        <input type="number" name="numero2" placeholder="Introduce el segundo número">
        <input type="number" name="numero3" placeholder="Introduce el tercer número">
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["numero1"]) && isset($_GET["numero2"])) {

        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $numero3 = $_GET["numero3"];//opcional

        $suma = $numero1 + $numero2;
        $resta = $suma - $numero3;

        echo "La suma de los números es " . $suma;
        echo "La resta del numero es " . $suma;
    }
    ?>
</body>
</html>