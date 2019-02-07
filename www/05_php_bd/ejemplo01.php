<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 1</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<h1>Conexión a MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "localhost",
    con el usuario "root" y sin contraseña.</p>
<p>No hace comprobación de errores.</p>

<?php
// Abrir la conexión
$conexion = mysql_connect("localhost", "root", "");

// Elegir la base de datos
mysql_select_db("blog", $conexion);

// Aquí van nuestras consultas, etc.

// Cerrar la conexión
mysql_close($conexion);
?>

</body>
</html>
