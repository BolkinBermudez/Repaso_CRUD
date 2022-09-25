<?php

Class Usuario_Model{

    private $db;
    private $usuarios;

    public function __construct(){

        require_once('Model/Conectar.php');
        $this->db=Conectar::Conexion();

        $this->usuarios=array();
                
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