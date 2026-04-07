<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if(isset($_SESSION['pagina_mostrada'])){
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['pagina_mostrada'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="welcome-card">
            <h1>Haz entrado con éxito a la SFM company c:</h1>
            <p class="subtitle">¡Tu sesión fue iniciada correctamente!</p>
            <p class="welcome-text">Bienvenido, <span><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>.</p>
        </div>
    </div>
</body>
</html>
