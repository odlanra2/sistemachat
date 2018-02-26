<?php
require_once "config.php"; 




class database{


protected $mbd;

public function __construct(){
try {
    $this->mbd = new PDO(DB_HOST, DB_USER,DB_PASS);
     $this->mbd->exec("set names utf8");
    foreach($this->mbd->prepare('select * from FOO') as $fila) {
        print_r($fila);
    }
    
   

} catch (PDOException $e) {
    
    die('base de datos no existe!!!');
}


}

}
//otra forma de conectarce 
/*class database extends PDO{

public function __construct(){

	parent::__construct('mysql:host=localhost;dbname=tusdulces_compra', 'root', '');
    parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}


}*/


?>