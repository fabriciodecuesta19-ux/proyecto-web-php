<?php
session_start();
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/sesion_info.php';
?>

<main>
    <h2>Manejo de Arreglos (Arrays)</h2>
    <p>Los arreglos son variables que pueden almacenar múltiples valores al mismo tiempo.</p>

    <div class="box">
        <h3>1. Arreglo Indexado</h3>
        <p>Se accede a los elementos por su posición numérica (índice).</p>
        <?php
        $colores = array("Rojo", "Verde", "Azul");
        echo "<p>Color en la posición 0: <strong>" . $colores[0] . "</strong></p>";
        echo "<p>Color en la posición 1: <strong>" . $colores[1] . "</strong></p>";
        echo "<p>Color en la posición 2: <strong>" . $colores[2] . "</strong></p>";
        ?>
    </div>

    <div class="box">
        <h3>2. Arreglo Asociativo</h3>
        <p>Usa claves nombradas en lugar de índices numéricos.</p>
        <?php
        $alumno = array(
            "nombre" => "María",
            "edad" => 20,
            "carrera" => "Ingeniería en Sistemas"
        );

        echo "<ul>";
        foreach ($alumno as $clave => $valor) {
            echo "<li><strong>" . ucfirst($clave) . ":</strong> " . $valor . "</li>";
        }
        echo "</ul>";
        ?>
    </div>

    <div class="box">
        <h3>3. Arreglo Multidimensional</h3>
        <p>Es un arreglo que contiene otros arreglos adentro (como una tabla).</p>
        <?php
        $productos = array(
            array("Laptop", 15000, 5),
            array("Mouse", 250, 20),
            array("Teclado", 500, 10),
            array("Monitor", 3000, 0) 
        );

        echo "<table>";
        echo "<tr><th>Producto</th><th>Precio</th><th>Stock</th><th>Estado</th></tr>";
        
        foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto[0] . "</td>";
            echo "<td>$" . $producto[1] . "</td>";
            echo "<td>" . $producto[2] . "</td>";
            
            if ($producto[2] > 0) {
                echo "<td style='color:green; font-weight:bold;'>Disponible</td>";
            } else {
                echo "<td style='color:red; font-weight:bold;'>Agotado</td>";
            }
            
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</main>

<?php
include 'includes/footer.php';
?>