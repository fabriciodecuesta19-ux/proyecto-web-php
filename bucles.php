<?php
session_start();
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/sesion_info.php';
?>

<main>
    <h2>Estructuras de Control: Bucles</h2>
    <p>Los bucles nos permiten repetir una acción varias veces sin escribir el mismo código múltiples veces.</p>

    <div class="box">
        <h3>1. Bucle for</h3>
        <p>Imprime los números del 1 al 5:</p>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<span style='display:inline-block; background:#3498db; color:white; padding:5px 10px; margin:2px; border-radius:4px;'>" . $i . "</span> ";
        }
        ?>
    </div>

    <div class="box">
        <h3>2. Bucle while</h3>
        <p>Cuenta regresiva del 3 al 1:</p>
        <?php
        $contador = 3;
        while ($contador > 0) {
            echo "<strong>" . $contador . "... </strong>";
            $contador--;
        }
        echo "<strong>¡Despegue!</strong>";
        ?>
    </div>

    <div class="box">
        <h3>3. Bucle foreach (Generando una tabla)</h3>
        <p>Recorriendo un arreglo de frutas:</p>
        <?php
        $frutas = array("Manzana", "Plátano", "Naranja", "Uva", "Fresa");
        
        echo "<table>";
        echo "<tr><th>#</th><th>Fruta</th></tr>";
        
        $num = 1;
        foreach ($frutas as $fruta) {
            echo "<tr>";
            echo "<td>" . $num . "</td>";
            echo "<td>" . $fruta . "</td>";
            echo "</tr>";
            $num++;
        }
        echo "</table>";
        ?>
    </div>
</main>

<?php
include 'includes/footer.php';
?>