<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CreatorBD</title>
    </head>
    <body>
    <div id="form">
        <form method="POST" action="query/create.php">
            <ul>
            <li>
                <label>Nombre de la Base de Datos</label>
                <input type="text" name="nombreBD">
                </li>
                <li>
                <label>Conjunto de datos</label>
                </li>
            </ul>
            <table>
                <tr>
                Titulo de columna
                </tr>
            </table>
            <table id="table" border="1">
                <tr>
                    <td><input type="text" name="col1"></td>
                    <td><select>
                            <option>Seleccionar</option>    
                        </select>
                    </td>                    
                </tr>
                <tr>
                    <td><input type="text" name="col2"></td>
                    <td><select>
                            <option>Seleccionar</option>    
                        </select>
                    </td>                    
                </tr><tr>
                    <td><input type="text" name="col3"></td>
                    <td><select>
                            <option>Seleccionar</option>    
                        </select>
                    </td>                    
                </tr>
                <tr>
                    <td><input type="text" name="col4"></td>
                    <td><select>
                            <option>Seleccionar</option>    
                        </select>
                    </td>                    
                </tr>
            </table><br>
            <input type="submit" value="Generar">
        </form>
        <button onclick="add()">Agregar</button>
            <button onclick="borrar()">Eliminar</button><br>
            <label>Añadir</label>
        <input type="number" name="nfilas">
        <button onclick="addq()">Agregar</button>
        </div>
        <script>
            function add(){
                var id=5;
            var table=document.getElementById("table");    {
            var row=table.insertRow(0);
                var cell1=row.insertCell(0);
                var cell2=row.insertCell(1);
                cell1.innerHTML="<td><input type='text'></td>";
                cell2.innerHTML="<td><select><option>Seleccionar</option></select></td>";
            }
            }
            function borrar(){
            document.getElementById("table").deleteRow(0);
            }
        </script>
        <script>
            
        </script>
        
    </body>
</html>