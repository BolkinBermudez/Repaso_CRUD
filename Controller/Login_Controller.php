<?php
session_start();
require_once('../model/Usuario_Model.php');

class Login_Controller
{

    private $login;
    private $password;




    public function __construct()
    {
        $this->login = $_POST['login'];
        $this->password = $_POST['password'];
    }

    //Este metodo verifica que el usuario logeado este registrado y redirige al usuario si existe.
    public function verifyCredentials()
    {
        $instanciaUsuarioModel = new Usuarios_Model();
        $verificacionUsuario = $instanciaUsuarioModel->check_User();

        if (!isset($verificacionUsuario)) {
            header('location:../index.php');
        } elseif (isset($verificacionUsuario)) {

           

            header('location:../view/Usuarios_View.php');
        }
    }


    public function getNombreUsuario()
    {
        return $this->login;
    }

    public function getPasswordUser()
    {
        return $this->password;
    }

    public function setNombreUsuario()
    {
        $this->login = $_POST['login'];
    }

    public function setPasswordUsuario()
    {
        $this->password = $_POST['password'];
    }
}

if (isset($_POST['login'])) {
    $iniciador = new Login_Controller();
    $iniciador->verifyCredentials();
}
