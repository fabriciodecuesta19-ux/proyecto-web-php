<?php
// 1. Iniciamos la sesión
session_start();

// 2. Lógica de reinicio (si el usuario hace clic en el botón)
if (isset($_GET['reiniciar'])) {
    session_destroy(); // Destruye la sesión actual
    header("Location: index.php"); // Recarga la página para crear una nueva
    exit();
}

// 3. Incluimos el header y el menú
include 'includes/header.php';
include 'includes/menu.php';

// 4. Incluimos la barra de información de sesión
include 'includes/sesion_info.php';
?>

<main>
    <h2>Bienvenido al Mini Proyecto</h2>
    <p>Esta es la página de inicio. Aquí se inicia la sesión y se guarda la hora de entrada del usuario.</p>
    
    <div class="box">
        <h3>¿Qué puedes hacer aquí?</h3>
        <p>Usa el menú superior para navegar por las diferentes páginas y ver ejemplos prácticos de:</p>
        <ul>
            <li>Variables y tipos de datos</li>
            <li>Condicionales (if, else, switch)</li>
            <li>Bucles (for, while, foreach)</li>
            <li>Arreglos (indexados, asociativos, multidimensionales)</li>
            <li>Sesiones en PHP</li>
        </ul>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <p>Si quieres reiniciar el contador de tiempo de la sesión, haz clic aquí:</p>
        <a href="index.php?reiniciar=1" class="btn">Reiniciar Sesión</a>
    </div>
</main>

<?php
// 5. Incluimos el footer
include 'includes/footer.php';
?>