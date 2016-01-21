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
			var t=5;
		</script>
		
		
		 <script>
            function agregar(){
            
            var table=document.getElementById("tabla");    {	
            var row=table.insertRow(0);
                var cell1=row.insertCell(0);
                var cell2=row.insertCell(1);
                var cell3=row.insertCell(2);
                var cell4=row.insertCell(3);
                var n=table.rows.length;
                
                cell1.innerHTML="<td><input type='text' value='' ></td>";
                cell2.innerHTML="<td><input type='text' name='<?php   ?>'></td>";
                cell3.innerHTML="<td><select><option>Seleccionar</option></select></td>";
                cell4.innerHTML="<td><input type='text'></td>";
            	
            	var n=table.rows.length;
            	var z=document.getElementById("numero");
            	z.setAttribute("value",n);
            alert(n);
            //variable para ver numero de filas
            alert(t);   
            t++;
            }
            
            }
            function borrar(){
            document.getElementById("table").deleteRow(0);
            }
        </script>
        
		<div id="Contenedor">
			<div id="Logotipo">
				<img src="images/Logo.png" /><p>DB Creator</p>
			</div> 
			<div id="Datos">	
				<form  method="post" name="" action="php/Script.php" >
					
					<table id="tabla1" border="1" style="margin-top: 5px; margin-left: 150px;">
						<input type="text" id="numero" name="nCol" value="4"/>
						<tr>
								<td>
									Orden:
								</td>
								<td>
									Nombre Columna:
								</td>
								<td>
									Tipo de Dato:
								</td>
								<td>
									Ejemplo:
								</td>
							</tr>
					</table>
						<table id="tabla" border="1" style="margin-top: 5px; margin-left: 150px;">
							
                <tr>
                	<td>
                		<input type="text" value="1" name="col1"/>
                	</td>
                    <td><input type="text" name="1" placeholder="nombre de la columna"></td>
                    <td><select name="select1">
                            <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>    
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
                <tr>
                	<td>
                		<input type="text" value="2" name="col1"/>
                	</td>
                    <td><input type="text" name="2" placeholder="nombre de la columna"></td>
                    <td><select name="select2">
                            <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>   
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
                <tr>
                	<td>
                		<input type="text" value="3" name="col1"/>
                	</td>
                    <td><input type="text" name="3" placeholder="nombre de la columna"></td>
                    <td><select name="select3">
                           <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>    
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
                <tr>
                	<td>
                		<input type="text" value="4" name="col1"/>
                	</td>
                    <td><input type="text" name="4" placeholder="nombre de la columna"></td>
                    <td><select name="select4">
                           <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>     
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
                
            </table>
			</div>
			<div id="AgregaryEliminar">
				<div id="Agregar">
						<a onclick="agregar()"><img src="images/+.svg" />Agregar </a>
					</div>
					<div id="Eliminar">
						<a onclick="#"><img src="images/-.png" />Eliminar</a>
					</div>
					</div>
			<div id="Exportar">
				<div id="Titulo">
					<h1>Exportar</h1>
				</div>
				<div id="DatosExportar">
						<div id="NombreTabla">
								Nombre de la Base de Datos: <input type="text" name="nombre" id="CampoTabla"/>
						</div>
						<div id="ExportarComo">
							Exportar como:
							<select>
								<option>Selecciona una opcion..</option>
								<option>SQL</option>
								<option>Excel</option>
							</select>
						</div>
						<div id="NumeroFilas">
							Numero de filas 
							<input type="number" name="filas" />
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