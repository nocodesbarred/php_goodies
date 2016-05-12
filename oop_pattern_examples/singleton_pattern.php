<?php

class Config {


private $props = array();
private static $instance;


private function __construct(){}

public static function getInstance(){

if( empty( self::$instance ) ){
     self::$instance = new Config();
     return self::$instance;
}

}

public function setProperty( $key , $val ){

     $this->props[$key] = $val;

}

public function getProperty( $key ){

     return $this->props[$key];

}

public function getAllProps(){
	foreach ( $this->props as $key => $value ) {
		echo "key: ".$key." value: ".$value."<br/>";
	}
}

}


$config = Config::getInstance();

$config->setProperty( "name" , "jake" );
$config->setProperty( "age" , 25 );

$config->getAllProps();

?>