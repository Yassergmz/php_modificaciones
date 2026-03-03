<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero" placeholder="Introduce un número">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        if ($numero % 2 == 0) {
            echo "< p style = 'color : red;'> El número es impar</p>" ;
        } else {
            echo "< p style = 'color : red;'> El número es impar</p>" ;
        }
    }
    ?>
</body>
</html>