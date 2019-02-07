<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 2</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<h1>Contar filas en una tabla de MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "localhost",
    con el usuario "root" y sin contraseña.</p>
<p>Cuenta las filas de la tabla "entrada".</p>
<p>No hace comprobación de errores.</p>

<?php
// Abrir la conexión
$conexion = mysql_connect("localhost", "root", "");

// Elegir la base de datos
mysql_select_db("blog", $conexion);

// Formar la consulta (seleccionando todas las filas)
$q = "select * from entrada";

// Ejecutar la consulta en la conexión abierta y obtener el "resultset"
$r = mysql_query($q, $conexion) or die(mysql_error());

// Calcular el número de filas y mostrarlo
$total = mysql_num_rows($r);
echo "Total de filas: $total";

// Cerrar la conexión
mysql_close($conexion);
?>

</body>
</html>
