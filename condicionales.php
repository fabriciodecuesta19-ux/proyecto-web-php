<?php
session_start();
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/sesion_info.php';
?>

<main>
    <h2>Estructuras de Control: Condicionales</h2>
    <p>Los condicionales permiten que el programa tome decisiones basadas en ciertas condiciones.</p>

    <div class="box">
        <h3>1. Uso de if, else y elseif</h3>
        <?php
        $calificacion = 85;
        echo "<p>Evaluando la calificación del alumno: <strong>" . $calificacion . "</strong></p>";

        if ($calificacion >= 90) {
            echo "<p>Resultado: <strong>Excelente</strong> (if)</p>";
        } elseif ($calificacion >= 80) {
            echo "<p>Resultado: <strong>Muy Bien</strong> (elseif)</p>";
        } elseif ($calificacion >= 70) {
            echo "<p>Resultado: <strong>Bien</strong> (elseif)</p>";
        } else {
            echo "<p>Resultado: <strong>Reprobado</strong> (else)</p>";
        }
        ?>
    </div>

    <div class="box">
        <h3>2. Uso de switch</h3>
        <?php
        $dia_semana = 3;
        $nombre_dia = "";

        switch ($dia_semana) {
            case 1: $nombre_dia = "Lunes"; break;
            case 2: $nombre_dia = "Martes"; break;
            case 3: $nombre_dia = "Miércoles"; break;
            case 4: $nombre_dia = "Jueves"; break;
            case 5: $nombre_dia = "Viernes"; break;
            case 6: $nombre_dia = "Sábado"; break;
            case 7: $nombre_dia = "Domingo"; break;
            default: $nombre_dia = "Día inválido";
        }

        echo "<p>El día número <strong>" . $dia_semana . "</strong> corresponde a: <strong>" . $nombre_dia . "</strong> (switch)</p>";
        ?>
    </div>
</main>

<?php
include 'includes/footer.php';
?>