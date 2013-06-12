<?php
//Archivo: generacion.php

// 	PersonalId 	PersonalFechaIngreso 	PersonalDni 
// PersonalApellido 	PersonalNombre 	PersonalSexo 	PersonalFechaNac 	
// PersonalEmail 	PersonalDireccion 	PersonalTelefono 	PersonalEstado
$nombres=array("Armando","Luis","Elvira","Carmen",
"Kelly","Susana","Carlos","Jaime","Alberto","Vernica","Valerio",
"Hugo","María","Luisa","Victor","José","Yoisy","Yuri","Pancracio");

$apellidos=array("Jimenez","Gómez","Flores",
"Torres","Castillo","Medina","Gonzáles",
"Gutierrez","Peña","Ruiz","Campos","Sánchez","Pisfil","Puemape","Vega");

$servidores=array("hotmail.com","gmail.com",
"yahoo.es","yahoo.com","terra.com","mixmail.com",
"abc.com","xyz.com","empresa12.com","apesi.com.pe");

$sexo=array("M","F");

$direccion=array("Jaen","San Ingnacio", "Chiclayo", "Callanca","Lambayeque", "Bagua");


$cnom=count($nombres);   //cantidad de nombres
$cape=count($apellidos); //cant. de apellidos
$cser=count($servidores);//cant. de servidores
$csex=count($sexo);
$cdir=count($direccion);


for($i=1;$i<=200;$i++){
$nom =rand(0,$cnom-1);
$ape1=rand(0,$cape-1);
$ape2=rand(0,$cape-1);
$ser =rand(0,$cser-1);
$sex=rand(0,$csex-1);
$dir=rand(0,$cdir-1);


$PersonalFechaIngreso=rand(2000,2013)."-".rand(10,12)."-".rand(10,30);
$PersonalDni=rand(10000000,99999999);
$PersonalNombre=$nombres[$nom];
$PersonalApellido=$apellidos[$ape1]." ".$apellidos[$ape2];
$PersonalSexo=$sexo[$sex];
$mes=rand(1,12);
if($mes<10) $mess="0".$mes;
$PersonalFechaNac=rand(1950,2013)."-".$mess."-".rand(10,30);


// correo - Juan Perez Vela jperezv@
$d31=substr($PersonalNombre,0,1).$apellidos[$ape1];
$d32=substr($apellidos[$ape2],0,1).rand(1,999)."@";
$d33=$servidores[$ser];
$d3=$d31.$d32.$d33;
$PersonalEmail=$d3;
// vamos a chitar las tildes para el correo 
$PersonalEmail=strtolower($PersonalEmail); //minusculas
$no = array("á","é","í","ó","ú","ñ");
$si = array("a","e","i","o","u","n");
$PersonalEmail=str_replace($no,$si,$PersonalEmail);

$PersonalDireccion=$direccion[$dir];
$PersonalTelefono=rand(100000,999999);

echo "insert into personal 
 values(null, '$PersonalFechaIngreso', '$PersonalDni', '$PersonalApellido', '$PersonalNombre', '$PersonalSexo', 
 '$PersonalFechaNac', '$PersonalEmail', '$PersonalDireccion', '$PersonalTelefono', 'A');<br>";
 
 /*
 echo "insert into personal 
(PersonalId, PersonalFechaIngreso, PersonalDni, PersonalApellido, PersonalNombre,
 PersonalSexo, PersonalFechaNac, PersonalEmail, PersonalDireccion, PersonalTelefono, PersonalEstado) 
 values(null', '$PersonalFechaIngreso', '$PersonalDni', '$PersonalApellido', '$PersonalNombre', '$PersonalSexo', 
 '$PersonalFechaNac', '$PersonalEmail', '$PersonalDireccion', '$PersonalTelefono', 'A')";
 */
 
//echo "insert into persona (nombres,apellidos,email) values('$d1','$d2','$d3');<br>";
}



?>
