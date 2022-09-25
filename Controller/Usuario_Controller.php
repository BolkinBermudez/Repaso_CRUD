<?php
    // LLamamos a el Modelo de usario 
    require_once('Model/Usuario_Model.php');

    $usuario = new Usuario_Model();
    $matrizUsuarios = $usuario->get_Usuarios();

    // LLamamos a la vista de usarío
    require_once('View/Usuarios_View.php'); 
?>