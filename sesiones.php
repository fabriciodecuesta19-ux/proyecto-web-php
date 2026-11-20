<?php
session_start();
include 'includes/header.php';
include 'includes/menu.php';
include 'includes/sesion_info.php';
?>

<main>
    <h2>Manejo de Sesiones en PHP</h2>
    <p>Una sesión en PHP permite mantener información del usuario mientras navega de una página a otra. A diferencia de las cookies, la información de la sesión se guarda de forma segura en el servidor.</p>

    <div class="box">
        <h3>¿Cómo funciona en este proyecto?</h3>
        <p>En todas las páginas de este sitio, se ejecuta <code>session_start()</code> al principio. Esto habilita el uso de la variable superglobal <code>$_SESSION</code>.</p>
        
        <p>En el <code>index.php</code>, guardamos la hora de ingreso usando <code>time()</code>:</p>
        <div style="background:#2c3e50; color:white; padding:10px; border-radius:5px; font-family:monospace;">
            $_SESSION['hora_inicio'] = time();
        </div>
        
        <p style="margin-top:10px;">Luego, en todas las páginas, calculamos el tiempo activo restando la hora actual menos la hora de inicio:</p>
        <div style="background:#2c3e50; color:white; padding:10px; border-radius:5px; font-family:monospace;">
            $tiempo_activo = time() - $_SESSION['hora_inicio'];
        </div>
    </div>

    <div class="box">
        <h3>Datos actuales de tu sesión</h3>
        <?php
        echo "<p><strong>ID de sesión actual:</strong> " . session_id() . "</p>";
        echo "<p><strong>Hora de inicio guardada en \$_SESSION:</strong> " . date('H:i:s', $_SESSION['hora_inicio']) . "</p>";
        ?>
        <p>Para reiniciar la sesión y que el contador vuelva a cero, puedes usar el botón en el <a href="index.php">Inicio</a>.</p>
    </div>
</main>

<?php
include 'includes/footer.php';
?>