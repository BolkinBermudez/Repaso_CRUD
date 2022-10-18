<?php
    // LLamamos a el Modelo de usario 
    require_once('model/Usuario_Model.php');

    $usuario = new Usuarios_Model();
    $matrizUsuarios = $usuario->get_Usuarios();

    // LLamamos a la vista de usarío
    require_once('view/Usuarios_View.php'); 
?>