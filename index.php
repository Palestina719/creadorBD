<?php  $pls=5; ?>
<!DOCTYPE >
<html>
	<head>
		<title>Sistema Base de Datos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        
	</head>
	<body>
		 <script>
            function agregar(){
            	var table=document.getElementById("tabla");    {	
            	var row=table.insertRow(0);
                var cell1=row.insertCell(0);
                var cell2=row.insertCell(1);
                var cell3=row.insertCell(2);
                
                <?php   
                	$conex=mysql_connect('localhost','root','');
					$db=mysql_select_db('test2m',$conex)or die('no existe la base de datos.');
					$consult=mysql_query("show tables");               	
                	
                	?>
                
                var n=table.rows.length;
                var select=90+n;
                cell1.innerHTML="<td><input type='text' value='"+n+"' id='tituloColumna' required></td>";
                cell2.innerHTML="<td><input type='text' name='"+n+"' placeholder='nombre de la columna' id='tituloColumna' required></td>";
                cell3.innerHTML="<td><select id='tituloColumna' name="+select+"><?php  
    						while($registr=mysql_fetch_row($consult)){
								echo "<option value='".$registr[0]."'>".$registr[0]."</option>";
							}
						?>   </select></td>";            	
            	var z=document.getElementById("numero");
            	z.setAttribute("value",n);
            	}
            }
            function borrar(){
            	var table=document.getElementById("tabla");{
            	var p=table.rows.length;
            		if(p>3){
            			document.getElementById("tabla").deleteRow(0);
		            	var y=document.getElementById("numero");;
            			var m=p-1;
            			y.setAttribute("value",m);
            		}
            	}
            }
        </script>
		<div id="Contenedor">
			<div id="Logotipo">
				<img src="images/Logo.png" /><p>DB Creator</p>
			</div> 
			<div id="Datos">	
				<form  method="post" name="" action="query/Script.php" >
					
					<table id="tabla1" border="1" style="margin-top: 5px; margin-left: 150px;">
						<input type="text" id="numero" name="nCol" value="3" style="display: none;"/>
						<tr>
							<td id="nombreColumna"  >
									<input type="text" value="Numerador" id="tituloColumna" />
								</td>
								<td id="nombreColumna"  >
									<input type="text" value="Titulo de la Columna" id="tituloColumna" />
								</td>
								<td id="nombreDato">
									<input type="text" value="Tipo de dato" id="tituloColumna" />
								</td>
								
							</tr>
					</table>
						<table id="tabla" border="1" style="margin-top: 5px; margin-left: 150px;">
                <?php   
                	$conex=mysql_connect('localhost','root','');
					$db=mysql_select_db('test2m',$conex)or die('no existe la base de datos.');
					$consult=mysql_query("show tables");               	
                	
                	?>
                <tr>
                	<td><input type="text" name="0" value="3" required id="tituloColumna"></td>
                    <td><input type="text" name="1" placeholder="nombre de la columna" required id="tituloColumna"></td>
                    <td><select name="select1" id="tituloColumna">
                        <?php  
    						while($registr=mysql_fetch_row($consult)){
								echo "<option value='".$registr[0]."'>".$registr[0]."</option>";
							}
						?>    
                        </select>
                    </td>
                </tr>
                <tr>
                	<?php   
                	$conex=mysql_connect('localhost','root','');
					$db=mysql_select_db('test2m',$conex)or die('no existe la base de datos.');
					$consult=mysql_query("show tables");               	
                	?>
                	<td><input type="text" name="0" value="2" required id="tituloColumna"></td>
                    <td><input type="text" name="2" placeholder="nombre de la columna" required id="tituloColumna"></td>
                    <td><select name="select2" id="tituloColumna">
                            <?php  
    						while($registr=mysql_fetch_row($consult)){
								echo "<option value='".$registr[0]."'>".$registr[0]."</option>";
							}
						?>   
                        </select>
                    </td>
                </tr>
                <tr>
                	<?php   
                	$conex=mysql_connect('localhost','root','');
					$db=mysql_select_db('test2m',$conex)or die('no existe la base de datos.');
					$consult=mysql_query("show tables");               	
                	?>
                	<td><input type="text" name="0" value="1" required id="tituloColumna"></td>
                    <td><input type="text" name="3" placeholder="nombre de la columna" required id="tituloColumna"></td>
                    <td><select name="select3" id="tituloColumna">
                           <?php  
    						while($registr=mysql_fetch_row($consult)){
								echo "<option value='".$registr[0]."'>".$registr[0]."</option>";
							}
						?>    
                        </select>
                    </td>
                </tr>
            </table>
			</div>
			<div id="AgregaryEliminar">
				<div id="Agregar">
						<a onclick="agregar()"><img src="images/+.svg" />Agregar </a>
					</div>
					<div id="Eliminar">
						<a onclick="borrar()"><img src="images/-.png" />Eliminar</a>
					</div>
					</div>
			<div id="Exportar">
				<div id="Titulo">
					<h1>Exportar</h1>
				</div>
				<div id="DatosExportar">
						<div id="NombreTabla">
								Nombre de la Base de Datos: <input type="text" name="nombre" id="CampoTabla" required/>
								Nombre de la tabla: <input type="text" name="nombret" id="CampoTabla" required/>
						</div>
						<div id="ExportarComo">
							Exportar como:
							<select name="tipo">
								<option>sql</option>
								<option>xls</option>
							</select>
						</div>
						<div id="NumeroFilas">
							Numero de filas 
							<input type="number" name="filas" required/>
						</div>
						<div id="Generar">
					<button type="submit" class="positive" name="save"> Generar </button>
				</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>