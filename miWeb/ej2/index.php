<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
        <input type="text" name ="apellido" placeholder="Introduce el apelliudo">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        echo "Hola, " . $nombre . "!";
    }
    ?>
</body>
</html>