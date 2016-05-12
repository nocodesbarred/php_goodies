<?php

abstract class Ship {
  
protected $name;

function __construct( $name ){

   $this->name = $name;

  }

abstract function explodeShip();

}

class BattleShip extends Ship{

function explodeShip(){

	echo "The Battleship $this->name just exploded sir!<br/>";

}

}

class Cruiser extends Ship{

function explodeShip(){

	echo "The Cruiser $this->name just exploded sir!<br/>";

}

}

class BattleCruiser extends Ship{

function explodeShip(){

	echo "The Battle Cruiser $this->name just exploded sir!<br/>";

}
}


class Fleet {

private $fleet = array();

function addShipToFleet( Ship $ship ){

$this->fleet[] = $ship;

}

function weLostOne(){

$count = count( $this->fleet );
if( $count > 0 ){

$Boom = array_pop( $this->fleet );

$Boom->explodeShip();

echo ( $count == 1 )? "That was are last Ship!" : "";

}}}


$navyFleet = new Fleet();

$navyFleet->addShipToFleet( new Battleship( "Big Boy" ));
$navyFleet->addShipToFleet( new BattleCruiser( "Snake Eyes" ));
$navyFleet->addShipToFleet( new Cruiser( "Little Man" ));

$navyFleet->weLostOne();
$navyFleet->weLostOne();
$navyFleet->weLostOne();

?>