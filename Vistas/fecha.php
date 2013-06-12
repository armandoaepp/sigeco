<?php
// convertir una fecha de dd/mm/yyyy a formato BD
function fechaFormatoBD($fechaN){	 
  $fecha = trim($fechaN);// fecha original le quitamos todos los espacion en blanco
  $dia 	 = substr($fecha, 0, 2);
  $mes   = substr($fecha, 3, 2);
  $ano 	 = substr($fecha, 6, 4);
  $fechaBD = $ano.'-'.$mes.'-'.$dia;
  return $fechaBD;
}

// convertir una fecha desde BD(yyyy/mm/dd) a formayo dd/mm/yyyy
function fechaFormatoPeru($fecha_){	 
  $fecha = trim($fecha_);// fecha original le quitamos todos los espacion en blanco
  $ano  = substr($fecha, 0, 4);
  $mes   = substr($fecha, 5, 2);
  $dia 	 = substr($fecha, 8, 2);
  $fechaBD = $dia.'/'.$mes.'/'.$ano;
  return $fechaBD;
}
// Retornar la Fecha Actula en Formato de MYSQL
function fechaActualBD(){
	return date("Y-m-d");   
}
function fechaActualSistema(){
	return date("d-m-Y");   
}