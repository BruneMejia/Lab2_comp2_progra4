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
</head>
<body>
    <h1>Haz entrado con exito a la SFM company c:</h1>
    <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>.</p>
</body>
</html>
