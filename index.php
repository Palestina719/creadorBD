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
			var t=4;
		</script>
		
		
		 <script>
            function agregar(){
            
            var table=document.getElementById("tabla");    {	
            var row=table.insertRow(0);
                var cell1=row.insertCell(0);
                var cell2=row.insertCell(1);
                var cell3=row.insertCell(2);
                
                var n=table.rows.length;
                
                cell1.innerHTML="<td><input type='text' name='<?php echo "$pls";  ?>' placeholder='nombre de la columna'></td>";
                cell2.innerHTML="<td><select><option>nombreMasculino</option> <option>nombreFemenino</option><option>apaterno</option><option>amaterno</option></select></td>";
                cell3.innerHTML="<td><input type='text'></td>";
            	<?php $pls+1;?>
            	
            	var n=table.rows.length;
            	var z=document.getElementById("numero");
            	z.setAttribute("value",n);
            //alert(n);
            //variable para ver numero de filas
            //alert(t);   
            t++;
            }
            
            }
            function borrar(){
            	var table=document.getElementById("tabla");{
            var p=table.rows.length;
            	if(p>3){
            document.getElementById("tabla").deleteRow(0);
            
            //alert(p);
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
								
								<td id="nombreColumna">
									Nombre Columna:
								</td>
								<td id="nombreDato">
									Tipo de Dato:
								</td>
								<td id="nombreEjemplo">
									Ejemplo:
								</td>
							</tr>
					</table>
						<table id="tabla" border="1" style="margin-top: 5px; margin-left: 150px;">
							
                <tr>
                	
                    <td><input type="text" name="1" placeholder="nombre de la columna" required></td>
                    <td><select name="select1">
                            <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>
                            <option>apaterno</option> 
                            <option>amaterno</option>    
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
                <tr>
                    <td><input type="text" name="2" placeholder="nombre de la columna" required></td>
                    <td><select name="select2">
                            <option>nombremasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>
                            <option>apaterno</option>
                            <option>amaterno</option>   
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
               
                <tr>
                	
                    <td><input type="text" name="3" placeholder="nombre de la columna" required></td>
                    <td><select name="select3">
                           <option>nombreMasculino</option>
                            <option>nombreFemenino</option>
                            <option>estados</option>
                            <option>apaterno</option>
                            <option>amaterno</option>     
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
						</div>
						<!-- <div><input type="button" value="Añadir" /><input name="fias" /></div> -->
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