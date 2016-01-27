<?php
header("Content-type:force-download");
header("Content-type:text/plain");
$tipo=$_POST['tipo'];
$Nombre=$_POST['nombre'];
header("Content-Disposition:attachment;filename=.$Nombre.$tipo");
$nombTabla=$_POST['nombret'];
set_time_limit(0);
ini_set("memory_limit","-1");
$nCampos=$_POST['nCol'];
//conexion
$llenar=mysqli_connect("localhost","root","");
mysqli_select_db($llenar,"test2m");
//condicion para 3 campos
if($nCampos==3){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),$columna3 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $masculino = mysqli_fetch_array($con2) and $paterno=mysqli_fetch_array($con3)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3)values(";echo "'$myCon1[1]','$masculino[1]','$paterno[1]');";
	$cont++;	
}
}//fin de if

//condicion para 4
if($nCampos==4){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$nombTabla=$_POST['nombret'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4)values(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]');";
	$cont++;	
}
}//fin de if

//condicion para 5 filas
if($nCampos==5){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$nombTabla=$_POST['nombret'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$nombTabla=$_POST['nombret'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]');";
	$cont++;	
}
}//fin de if

//condicion con 6 filas
if($nCampos==6){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$nombTabla=$_POST['nombret'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]');";
	$cont++;	
}
}//fin de if6

//condicion con 7 filas
if($nCampos==7){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==8){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]');";
	$cont++;	
}
}//fin de if
//condicion para 9 campos
if($nCampos==9){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(9) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==10){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10)){	
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==11){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==12){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==13){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==14){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==15){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==16){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
$columna16=$_POST['16'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
$campo16=$_POST['106'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30),$columna16 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta16
$consulta16="SELECT t.* FROM $campo16 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo16)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
$con16=mysqli_query($llenar,$consulta16);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15) and $myCon16=mysqli_fetch_array($con16)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15,$columna16)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]','$myCon16[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==17){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
$columna16=$_POST['16'];
$columna17=$_POST['17'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
$campo16=$_POST['106'];
$campo17=$_POST['107'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30),$columna16 varchar(30),$columna17 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta16
$consulta16="SELECT t.* FROM $campo16 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo16)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta17
$consulta17="SELECT t.* FROM $campo17 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo17)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
$con16=mysqli_query($llenar,$consulta16);
$con17=mysqli_query($llenar,$consulta17);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15) and $myCon16=mysqli_fetch_array($con16) and $myCon17=mysqli_fetch_array($con17)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15,$columna16,$columna17)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]','$myCon16[1]','$myCon17[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==18){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
$columna16=$_POST['16'];
$columna17=$_POST['17'];
$columna18=$_POST['18'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
$campo16=$_POST['106'];
$campo17=$_POST['107'];
$campo18=$_POST['108'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30),$columna16 varchar(30),$columna17 varchar(30),$columna18 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta16
$consulta16="SELECT t.* FROM $campo16 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo16)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta17
$consulta17="SELECT t.* FROM $campo17 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo17)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta18
$consulta18="SELECT t.* FROM $campo18 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo18)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
$con16=mysqli_query($llenar,$consulta16);
$con17=mysqli_query($llenar,$consulta17);
$con18=mysqli_query($llenar,$consulta18);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15) and $myCon16=mysqli_fetch_array($con16) and $myCon17=mysqli_fetch_array($con17)
and $myCon18=mysqli_fetch_array($con18)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15,$columna16,$columna17,$columna18)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]','$myCon16[1]','$myCon17[1]','$myCon18[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==19){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
$columna16=$_POST['16'];
$columna17=$_POST['17'];
$columna18=$_POST['18'];
$columna19=$_POST['19'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
$campo16=$_POST['106'];
$campo17=$_POST['107'];
$campo18=$_POST['108'];
$campo19=$_POST['109'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla=$_POST['nombret'];
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30),$columna16 varchar(30),$columna17 varchar(30),$columna18 varchar(30),
$columna19 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta16
$consulta16="SELECT t.* FROM $campo16 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo16)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta17
$consulta17="SELECT t.* FROM $campo17 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo17)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta18
$consulta18="SELECT t.* FROM $campo18 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo18)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta19
$consulta19="SELECT t.* FROM $campo19 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo19)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
$con16=mysqli_query($llenar,$consulta16);
$con17=mysqli_query($llenar,$consulta17);
$con18=mysqli_query($llenar,$consulta18);
$con19=mysqli_query($llenar,$consulta19);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15) and $myCon16=mysqli_fetch_array($con16) and $myCon17=mysqli_fetch_array($con17)
and $myCon18=mysqli_fetch_array($con18) and $myCon19=mysqli_fetch_array($con19)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15,$columna16,$columna17,$columna18,$columna19)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]','$myCon16[1]','$myCon17[1]','$myCon18[1]'
,'$myCon19[1]');";
	$cont++;	
}
}//fin de if

if($nCampos==20){
//titulo de la columna
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
$columna5=$_POST['5'];
$columna6=$_POST['6'];
$columna7=$_POST['7'];
$columna8=$_POST['8'];
$columna9=$_POST['9'];
$columna10=$_POST['10'];
$columna11=$_POST['11'];
$columna12=$_POST['12'];
$columna13=$_POST['13'];
$columna14=$_POST['14'];
$columna15=$_POST['15'];
$columna16=$_POST['16'];
$columna17=$_POST['17'];
$columna18=$_POST['18'];
$columna19=$_POST['19'];
$columna20=$_POST['20'];
//nombre para los campos a cosultar select
$campo1=$_POST['select1'];
$campo2=$_POST['select2'];
$campo3=$_POST['select3'];
$campo4=$_POST['94'];
$campo5=$_POST['95'];
$campo6=$_POST['96'];
$campo7=$_POST['97'];
$campo8=$_POST['98'];
$campo9=$_POST['99'];
$campo10=$_POST['100'];
$campo11=$_POST['101'];
$campo12=$_POST['102'];
$campo13=$_POST['103'];
$campo14=$_POST['104'];
$campo15=$_POST['105'];
$campo16=$_POST['106'];
$campo17=$_POST['107'];
$campo18=$_POST['108'];
$campo19=$_POST['109'];
$campo20=$_POST['110'];
//numero de veces del ciclo
$filas=$_POST['filas'];
$cont=1;
$nombTabla;
//imprresion
echo "create database $Nombre;";
echo "use $Nombre;";
echo "create table $nombTabla(id int(8) auto_increment primary key,$columna1 varchar(30),$columna2 varchar(30),
$columna3 varchar(30),$columna4 varchar(30), $columna5 varchar(30), $columna6 varchar(30),$columna7 varchar(30),$columna8 varchar(30),
$columna9 varchar(30),$columna10 varchar(30),$columna11 varchar(30),$columna12 varchar(30),$columna13 varchar(30)
,$columna14 varchar(30),$columna15 varchar(30),$columna16 varchar(30),$columna17 varchar(30),$columna18 varchar(30),
$columna19 varchar(30),$columna20 varchar(30));";	
//$consulta1
$consulta1="SELECT t.* FROM $campo1 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo1)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta2
$consulta2="SELECT t.* FROM $campo2 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo2)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//$consulta3
$consulta3="SELECT t.* FROM $campo3 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo3)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta4
$consulta4="SELECT t.* FROM $campo4 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo4)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta5
$consulta5="SELECT t.* FROM $campo5 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo5)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta6
$consulta6="SELECT t.* FROM $campo6 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo6)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta7
$consulta7="SELECT t.* FROM $campo7 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo7)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta8
$consulta8="SELECT t.* FROM $campo8 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo8)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta9
$consulta9="SELECT t.* FROM $campo9 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo9)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta10
$consulta10="SELECT t.* FROM $campo10 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo10)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta11
$consulta11="SELECT t.* FROM $campo11 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo11)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta12
$consulta12="SELECT t.* FROM $campo12 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo12)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta13
$consulta13="SELECT t.* FROM $campo13 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo13)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta14
$consulta14="SELECT t.* FROM $campo14 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo14)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta15
$consulta15="SELECT t.* FROM $campo15 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo15)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta16
$consulta16="SELECT t.* FROM $campo16 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo16)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta17
$consulta17="SELECT t.* FROM $campo17 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo17)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta18
$consulta18="SELECT t.* FROM $campo18 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo18)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta19
$consulta19="SELECT t.* FROM $campo19 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo19)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";
//consulta20
$consulta20="SELECT t.* FROM $campo20 AS t JOIN (SELECT ROUND(RAND() * (SELECT MAX(id) FROM $campo20)) AS id) AS x WHERE t.id >= x.id LIMIT $filas";

//query
$con1=mysqli_query($llenar,$consulta1);
$con2=mysqli_query($llenar,$consulta2);
$con3=mysqli_query($llenar,$consulta3);
$con4=mysqli_query($llenar,$consulta4);
$con5=mysqli_query($llenar,$consulta5);
$con6=mysqli_query($llenar,$consulta6);
$con7=mysqli_query($llenar,$consulta7);
$con8=mysqli_query($llenar,$consulta8);
$con9=mysqli_query($llenar,$consulta9);
$con10=mysqli_query($llenar,$consulta10);
$con11=mysqli_query($llenar,$consulta11);
$con12=mysqli_query($llenar,$consulta12);
$con13=mysqli_query($llenar,$consulta13);
$con14=mysqli_query($llenar,$consulta14);
$con15=mysqli_query($llenar,$consulta15);
$con16=mysqli_query($llenar,$consulta16);
$con17=mysqli_query($llenar,$consulta17);
$con18=mysqli_query($llenar,$consulta18);
$con19=mysqli_query($llenar,$consulta19);
$con20=mysqli_query($llenar,$consulta20);
//ciclo de impresion 
while($myCon1=mysqli_fetch_array($con1) and $myCon2 = mysqli_fetch_array($con2) 
and $myCon3=mysqli_fetch_array($con3) and $myCon4=mysqli_fetch_array($con4) and $myCon5=mysqli_fetch_array($con5)and
$myCon6=mysqli_fetch_array($con6) and $myCon7=mysqli_fetch_array($con7) and $myCon8=mysqli_fetch_array($con8) and
$myCon9=mysqli_fetch_array($con9) and $myCon10=mysqli_fetch_array($con10) and $myCon11=mysqli_fetch_array($con11)
and $myCon12=mysqli_fetch_array($con12) and $myCon13=mysqli_fetch_array($con13) and $myCon14=mysqli_fetch_array($con14)
and $myCon15=mysqli_fetch_array($con15) and $myCon16=mysqli_fetch_array($con16) and $myCon17=mysqli_fetch_array($con17)
and $myCon18=mysqli_fetch_array($con18) and $myCon19=mysqli_fetch_array($con19) and $myCon20=mysqli_fetch_array($con20)){
		
echo "insert into $nombTabla($columna1,$columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9,$columna10
,$columna11,$columna12,$columna13,$columna14,$columna15,$columna16,$columna17,$columna18,$columna19,$columna20)values
(";echo "'$myCon1[1]','$myCon2[1]','$myCon3[1]','$myCon4[1]','$myCon5[1]','$myCon6[1]','$myCon7[1]','$myCon8[1]','$myCon9[1]'
,'$myCon10[1]','$myCon11[1]','$myCon12[1]','$myCon13[1]','$myCon14[1]','$myCon15[1]','$myCon16[1]','$myCon17[1]','$myCon18[1]'
,'$myCon19[1]','$myCon20[1]');";
	$cont++;	
}
}//fin de if
?>