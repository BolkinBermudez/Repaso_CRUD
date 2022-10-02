<?php

Class Usuario_Model{

    private $db;
    private $usuarios;

    public function __construct(){

        require_once('Model/Conectar.php');
        $this->db=Conectar::Conexion();

        $this->usuarios=array();
                
    }

    public function comprobar_Usuario(){

        $consulta=$this->db->query("SELECT * usuario WHERE Correo= :login AND pass= :password");

        //Rescatamos los  datos que el usuario a añadido al formulario login
        $login=htmlentities(addslashes($_POST["login"]));
        $pass=htmlentities(addslashes($_POST["password"]));

        //Mostramos la equivalencia entre los marcadores y las variables a pasar por consulta sql.
        $consulta->bindValue(":login", $login);

        $consulta->bindValue("password",$pass);
        

        $consulta->execute();

        $numero_Registros=$consulta->rowCount();

        if ($numero_Registros !=0){
            echo("Ingreso");

        }else{
            header("location:login.php");
        }
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