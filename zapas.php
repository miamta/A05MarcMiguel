<?php

class zapas
{
//definicion de variables
public $talla="43 ";
public $marca="nike ";
public $color="negro ";
public $modelo="airmax ";

//definicion de metodos
public function settalla($cambiartalla){
  $this ->talla=$cambiartalla;}

  public function gettalla(){
  return $this->talla;
}
public function setmarca($cambiarmarca){
  $this ->marca=$cambiarmarca;}

public function getmarca(){
return $this ->marca;
}

public function setcolor($cambiarcolor){
  $this ->color=$cambiarcolor;}

public function getcolor(){
  return $this -> color;
}
public function setmodelo($cambiarmodelo){
  $this ->modelo=$cambiarmodelo;}

public function getmodelo(){
  return $this -> modelo;
}
}
 ?>
