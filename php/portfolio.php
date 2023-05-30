<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // obtenemos valores del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // mostramos, por pantalla, los datos del formulario
    echo "Nombre: $name <br>";
    echo "Correo electrónico: $email <br>";
    echo "Mensaje: $message <br>";
}
?>