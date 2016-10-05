<?php

class ia
{
//declaracion de una propiedad
public $columna = '1';
public $fila= '3';
//declaracion de metodo
public function getcolumna(){
  $this->columna = rand (1,3);
return $this->columna;
}
public function getfila(){
  $this->fila = rand (1,3);
  return $this->fila;
}
}
 ?>
