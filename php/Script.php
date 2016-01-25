<?php
$tipo=$_POST['tipo'];
header("Content-type:force-download");
header("Content-type:text/plain");
header("Content-Disposition:attachment;filename=test.$tipo");
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
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['select4'];

//ciclo para la impresion

//if($nCampos==4){
$filas=$_POST['filas'];

$cont=1;
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table myTable(id int(5) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),$columna3 varchar(30),$columna4 varchar(30));";	
$q=($filas/10);


//random
	$rand=rand(1,90);
//	
 $llenar=mysqli_connect("localhost","root","");
// mysqli_select_db("test2m",$llenar);
mysqli_select_db($llenar,"test2m");
// //
$consulta1="SELECT nombre FROM nombreFemenino order by rand() limit $filas;";
$consulta2="SELECT nombre FROM nombreMasculino order by rand() limit $filas;";

$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2); 

while($myCon1=mysqli_fetch_array($con1) and $masculino = mysqli_fetch_array($con2)){	


// $cons="select * from $campo2 ORDER BY RAND()";
// $datos=mysql_query($cons,$llenar);
// $myrow=mysql_fetch_array($datos);

// $cons2="select * from $campo3 ORDER BY RAND()";
// $datos=mysql_query($cons2,$llenar);
// $myrow1=mysql_fetch_array($datos);

// $cons3="select * from $campo4 ORDER BY RAND()";
// $datos=mysql_query($cons3,$llenar);
// $myrow2=mysql_fetch_array($datos);
//mysqli_close($llenar);
//mysql_close($llenar);	
echo "insert into datos values(";echo "'$myCon1[0]','$masculino[0]','$myCon1[0]','$myCon1[0]');";
	
	$cont++;	
}

//}//fin de if
?>



