<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Iniciar sesion</h2>

<form action="validar_login.php" method="post">
    <label>Correo:</label>
    <input type="email" name="correo" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Ingresar</button>
</form>

</body>
</html>