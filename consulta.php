<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Productos</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 3px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        } 
    </style>
</head>
<body>
    <h2><center>Lista de Productos</center></h2>
    <table>
        <tr><th>Imagen</th><th>Codigo</th>
        <th>Nombre Producto</th>
        <th>Cantidad</th><th>Precio</th></tr>
        <?php
            $productos = "select CodigoProducto,
            NombreProducto,CantidadProducto,PrecioProducto,ImagenProducto from Producto";
            $resultadoproducto = $conexion->query($productos);
            while ($registroproductos =$resultadoproductos ->fetch_array(MYSQLI_BOTH))
            {
                echo "<tr><td><img src='../Imagenes/".
                $registroproductos['ImagenProducto']."''></td><td>".$registroproductos['CodigoProducto']."''></td><td>".$registroproductos['NombreProducto']."''></td><td>".$registroproductos['CantidadProducto']."''></td><td>".$registroproductos['PrecioProducto']."''></td><td>";
            }
        ?>
    </table>
    
</body>
</html>