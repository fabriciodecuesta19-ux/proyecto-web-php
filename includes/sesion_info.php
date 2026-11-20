<?php
// Si no hay una hora de inicio en la sesión, la creamos (por si acaso)
if (!isset($_SESSION['hora_inicio'])) {
    $_SESSION['hora_inicio'] = time();
}

// Calculamos la hora actual y el tiempo transcurrido
$hora_actual = time();
$tiempo_transcurrido = $hora_actual - $_SESSION['hora_inicio'];

// Convertimos el tiempo a minutos y segundos
$minutos = floor($tiempo_transcurrido / 60);
$segundos = $tiempo_transcurrido % 60;

// Formateamos las horas para mostrarlas bonitas (HH:MM:SS)
$hora_inicio_formateada = date('H:i:s', $_SESSION['hora_inicio']);
$hora_actual_formateada = date('H:i:s', $hora_actual);
?>

<!-- Este bloque se verá en TODAS las páginas -->
<div class="session-info">
    <p><strong>Hora inicio sesión:</strong> <span><?php echo $hora_inicio_formateada; ?></span></p>
    <p><strong>Hora actual:</strong> <span><?php echo $hora_actual_formateada; ?></span></p>
    <p><strong>Tiempo activo:</strong> <span><?php echo $minutos . " minutos " . $segundos . " segundos"; ?></span></p>
</div>