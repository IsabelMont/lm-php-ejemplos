<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 3</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<h1>Mostrar todas las filas de una tabla de MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "localhost",
    con el usuario "root" y sin contraseña.</p>
<p>Muestra las filas de la tabla "entrada".</p>
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

// Calcular el número de filas
$total = mysql_num_rows($r);

// Mostrar el contenido de las filas
if ($total > 0) {
    while ($fila = mysql_fetch_assoc($r)) {
        echo "<strong>" . $fila['titulo'] . "</strong><br />";
        echo "Texto: " . $fila['texto'] . "<br />";
        echo "Fecha: " . $fila['fecha'] . "<br /><br />";
    }
}

// Cerrar la conexión
mysql_close($conexion);
?>

</body>
</html>
