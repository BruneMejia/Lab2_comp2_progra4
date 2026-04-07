<?php
session_start();
require_once 'conexion.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $sql->bind_param("s", $correo);
    $sql->execute();

    $resultado = $sql->get_result();

    if($resultado->num_rows > 0){
        $usuario = $resultado->fetch_assoc();

        if($password == $usuario['password']){
            $_SESSION['usuario'] = $correo;
            header("Location: index.php");
        } else {
            echo "Contraseña incorrecta";
        }

    } else {
        echo "Usuario no encontrado";
    }
}
?>