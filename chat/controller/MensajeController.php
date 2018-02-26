<?php
 require("../model/MensajeModelo.php");

		$mensaje = $_POST['mensaje'] ;  
		$de   = $_POST['de'];
		$para   = $_POST['para'];


  
  $msg = new Mensajes(); 
  $resultado = $msg->addmensaje($de,$para,$mensaje);
 

 echo $resultado;


  

  


?>