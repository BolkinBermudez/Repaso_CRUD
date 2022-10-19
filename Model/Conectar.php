<?php 

Class Conectar{

    public static function Conexion(){

        try{
            $conexion = new PDO('mysql:host=localhost; port=3308; dbname=tuberia_drop','root','');
            //establecemos el juego de excepciones
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //establecemos el juego de caracteres
            $conexion->exec('SET CHARACTER SET UTF8');
            
        }catch(Exception $e){
            die('Error' . $e->getMessage());
            
            echo('Linea del error'). $e->getLine();

         }

         return $conexion;
    }
    
}


?>
