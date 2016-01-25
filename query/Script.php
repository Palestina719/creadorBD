<?php
header("Content-type:force-download");
header("Content-type:text/plain");
$tipo=$_POST['tipo'];
header("Content-Disposition:attachment;filename=test.$tipo");
//variables de la tabla
$Nombre=$_POST['nombre'];
set_time_limit(0);
ini_set("memory_limit","-1");
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$nCampos=$_POST['nCol'];
//nombre para los campos a cosultar
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
//ciclo para la impresion
$filas=$_POST['filas'];
$cont=1;
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table myTable(id int(5) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),$columna3 varchar(30));";	
$q=($filas/10);	
$llenar=mysqli_connect("localhost","root","");
mysqli_select_db($llenar,"test2m");
//aumentar velocidad sin order by rand()
//$consulta1="SELECT nombre FROM nombreFemenino order by rand() limit $filas;";
$consulta1="SELECT t.* FROM nombreFemenino AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM nombreFemenino)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2="SELECT nombre FROM nombreMasculino order by rand() limit $filas;";
$consulta2="SELECT t.* FROM nombreMasculino AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM nombreMasculino)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3="SELECT paterno FROM apaterno order by rand() limit $filas;";
$consulta3="SELECT t.* FROM apaterno AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM apaterno)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3); 
while($myCon1=mysqli_fetch_array($con1) and $masculino = mysqli_fetch_array($con2) and $paterno=mysqli_fetch_array($con3)){	
echo "insert into datos values(";echo "'$myCon1[1]','$masculino[1]','$paterno[1]');";
	$cont++;	
}
?>