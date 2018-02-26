<?php
require_once "../config/conexion.php"; 


class Mensajes extends database{


public function __construct() 
    { 
        parent::__construct(); 
    } 



public function addmensaje($de,$para,$mensaje){
$sql = $this->mbd->prepare("insert into mensaje (para,de,texto) 
					values ( '$de','$para','$mensaje')");
$sql->execute();


			echo 'se ha añadido el mensaje';


}







 }





?>