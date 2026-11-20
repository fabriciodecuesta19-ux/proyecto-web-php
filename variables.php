<?php
// Iniciamos sesión (obligatorio en todas las páginas para que funcione el reloj)
session_start();

// Incluimos el header, menú e info de sesión
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/sesion_info.php';
?>

<main>
    <h2>Variables y Tipos de Datos en PHP</h2>
    <p>En PHP, las variables se declaran con el signo de peso ($) seguido del nombre de la variable. No es necesario declarar el tipo de dato, PHP lo infiere automáticamente.</p>

    <div class="box">
        <h3>1. Declaración y Tipos de Datos</h3>
        <?php
        // Declaración de variables
        $nombre = "Juan Pérez";           // String (Cadena de texto)
        $edad = 25;                       // Int (Entero)
        $estatura = 1.75;                 // Float (Decimal)
        $es_estudiante = true;            // Boolean (Verdadero/Falso)
        $materias = array("Web", "BD", "Redes"); // Array (Arreglo)

        // Mostrando los valores con echo
        echo "<p><strong>String:</strong> " . $nombre . "</p>";
        echo "<p><strong>Int:</strong> " . $edad . " años</p>";
        echo "<p><strong>Float:</strong> " . $estatura . " metros</p>";
        
        // Para los booleanos, mostramos un texto amigable
        echo "<p><strong>Boolean:</strong> " . ($es_estudiante ? "Sí es estudiante" : "No es estudiante") . "</p>";
        
        // Mostrando el array (temporalmente con print_r para que se vea su estructura)
        echo "<p><strong>Array:</strong> ";
        print_r($materias);
        echo "</p>";
        ?>
    </div>

    <div class="box">
        <h3>2. Uso de funciones: date() y count()</h3>
        <?php
        // Uso de date() para mostrar la fecha actual
        $fecha_actual = date("d/m/Y");
        
        // Uso de count() para contar elementos de un arreglo
        $num_materias = count($materias);

        echo "<p>La fecha de hoy es: <strong>" . $fecha_actual . "</strong> (Generado con date())</p>";
        echo "<p>El estudiante está inscrito a <strong>" . $num_materias . "</strong> materias. (Generado con count())</p>";
        ?>
    </div>
</main>

<?php
include 'includes/footer.php';
?>