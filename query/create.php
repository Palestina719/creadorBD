<?php
require('conexion.php');

$NoBD=$_POST['nombreBD'];
$col1=$_POST['col1'];
$col2=$_POST['col2'];
$col3=$_POST['col3'];
$col4=$_POST['col4'];
$sql = "CREATE DATABASE ".$NoBD;
mysql_query("$sql");


$conexion=mysql_connect("localhost","root","");
mysql_select_db("$NoBD",$conexion);
$res=mysql_query("CREATE TABLE datos($col1 varchar(30),$col2 varchar(30),$col3 varchar(30),$col4 varchar(30))",$conexion);

if($res==0)
{
	printf("No se ha podido crear la tabla<P>\n");
}else{
	printf("La tabla se ha creado correctamente<P>\n");
}


$llenar=mysql_connect("localhost","root","");
mysql_select_db("informacion",$llenar);

$cons="select nombre from nombreh";
$datos=mysql_query($cons,$llenar);
mysql_close($llenar);
?>

<?php
$conexion1=mysql_connect("localhost","root","");
mysql_select_db("$NoBD",$conexion1);
while ($myrow = mysql_fetch_row($datos)) {
echo"$myrow[0]";
$inser="insert into datos values('$myrow[0]','2','3','4')";
mysql_query($inser);
}
?>