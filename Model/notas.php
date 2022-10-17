/** public function check_User(){

$InstLoginController= new Login_Controller();

$consulta=$this->db->query("SELECT * usuario WHERE Correo= :login AND pass= :password");

//Rescatamos los  datos que el usuario a añadido al formulario login que encapsulamos en el controlador
$login=$InstLoginController->getNombreUsuario();
$pass=$InstLoginController->getPasswordUser();

//Mostramos la equivalencia entre los marcadores y las variables a pasar por consulta sql.
$consulta->bindValue("login", $login);
$consulta->bindValue("password",$pass);


$consulta->execute();

$respuesta=$consulta->fetchAll(PDO::FETCH_OBJ);

return $respuesta;
} */