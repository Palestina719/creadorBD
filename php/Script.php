<?php
header("Content-type:force-download");
header("Content-type:text/plain");
header("Content-Disposition:attachment;filename=test.sql");
//variables de la tabla
$Nombre=$_POST['nombre'];
set_time_limit(0);
ini_set("memory_limit","-1");
require('conexion.php');
$Nombre=$_POST['nombre'];
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$nCampos=$_POST['nCol'];
//nombre para los campos a cosultar
$campo1=$_POST[select1];
$campo2=$_POST[select2];
$campo3=$_POST[select3];
$campo4=$_POST[select4];

//ciclo para la impresion
$filas=$_POST['filas'];

$cont=1;
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table myTable(id int(5) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),$columna3 varchar(30),$columna4 varchar(30));";	
while($cont<=$filas){
$llenar=mysql_connect("localhost","root","");
mysql_select_db("test1",$llenar);

$consulta1="SELECT * FROM $campo1 ORDER BY RAND() LIMIT 1";
$con1q=mysql_query($consulta1);
$myCon1=mysql_fetch_array($con1q);

$cons="select * from $columna2 ORDER BY RAND() LIMIT 1";
$datos=mysql_query($cons,$llenar);
$myrow=mysql_fetch_array($datos);
mysql_close($llenar);
	
echo "insert into datos values(";	
		echo "'$myrow[0]','$myCon1[0]','$myCon1[0]','$myCon1[0]');";
	$cont++;	
}
?>



