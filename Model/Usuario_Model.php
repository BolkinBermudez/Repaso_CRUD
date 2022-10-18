<?php

require_once('../controller/Login_Controller.php');

Class Usuarios_Model{

    private $db;
    private $usuarios;

    public function __construct(){

        require_once('../model/Conectar.php');
        $this->db=Conectar::Conexion();

        $this->usuarios=array();
                
    }

   

    public function check_User(){

        try {
           
        $InstLoginController = new Login_Controller();
        $login=$InstLoginController->getNombreUsuario();
        $pass=$InstLoginController->getPasswordUser();
        
    
        $sql="SELECT * FROM usuario WHERE Correo= ? AND pass= ?";

        //Almacenamos el objeto que devuelve el metodo prepare del objeto conexion en donde enviamos por parametro la consulta
        $resultado=$this->db->prepare($sql);
       
        //Rescatamos los  datos que el usuario a añadido al formulario login que encapsulamos en el controlador
        $resultado->execute(array($login, $pass));  

        $logeo=$resultado->fetchAll(PDO::FETCH_OBJ);

        

        } catch (Exception $e) {
            die($e->getMessage());
        }
        echo $logeo;
        return $logeo;
    }

    public function get_Usuarios(){

        $consulta=$this->db->query('SELECT * FROM usuario');

        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $this->usuarios[]=$filas;

        }
        return $this->usuarios;
    }

   

}
?>