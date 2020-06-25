<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuel C. Bernal</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class=".body">
    <font face="Arial">
    <h1 style="text-align:center;font-size:320%;"> <img align="left" src="Img/logo.svg" alt="Imágen de ejemplo"
            style="width:50px;height:60px;">
        Manuel C. Bernal</h1>
    <nav>
        <a href="file:///C:/Users/Tempo/Documents/HTML/Escuela/Ingresar_profesores.html" class="nav-enlace">Profesores</a>
        <a href="http://localhost/escuela/Inicio.php" class="nav-enlace">Cerrar sesión</a>
    </nav>
    <form>
        <label for="id">Administrador:</label><br>
        <input type="text" id="id" name="id">
        <h1 class="texto" align="center">Datos del alumno</h1>
    </form>
    <section class="alumno">
        <article class="padre1">
            <p class="Columna1">&nbsp;Periodo escolar:</p>
            <p class="Columna1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grupo:
            </p>
            <p class="Columna1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alumno:
            </p>
        </article>
        <select name="periodo" class="nav-enlace">
            <option value="p1" selected>Periodo escolar</option>
            <option value="p2">Value 2</option>
            <option value="p3">Value 3</option>
        </select>

        <select name="grupo" class="nav-enlace">
            <option value="g1" selected>Grupo</option>
            <option value="g2">Value 2</option>
            <option value="g3">Value 3</option>
        </select>

        <select name="alumno" class="nav-enlace">
            <option value="a1" selected>Alumno</option>
            <option value="a2">Value 2</option>
            <option value="a3">Value 3</option>
        </select>

    </section>

    <form action="alumnos_guardar.php" method="POST" class="formulario">
    <br>

    <label for="prof">Profesor:</label><br>
    <select name="prof" style="width:360px">
        <option value="a1" selected>Profe1</option>
        <option value="a2">Value 2</option>
        <option value="a3">Value 3</option>
    </select>

    <br>
        <label for="identificador">Identificador:</label><br>
        <input type="text" class="form-control input-lg" REQUIERED name="identificador" size="46" required><br>

        <label for="name">Nombre(s):</label><br>
        <input type="text" class="form-control input-lg" REQUIERED name="name" size="46" required><br>

        <table>

            <tr>
                <td><label for="Pa">Primer apellido:</label><br>
                    <input type="text" class="form-control input-lg" REQUIERED name="Pa" required><br></td>

                <td><label for="Sa">Segundo apellido:</label><br>
                    <input type="text" class="form-control input-lg" REQUIERED name="Sa" required><br></td>
            </tr>
            <tr>
                <td>
                    <label for="Dir">Dirección:</label><br>
                    <input type="text" class="form-control input-lg" REQUIERED name="Dir" required><br></td>
                <td><label for="Tel">Teléfono:</label><br>
                    <input type="text" class="form-control input-lg" REQUIERED name="Tel" required><br></td>
            </tr>
        </table>
            
                    <label for="curp">CURP:</label><br>
                    <input type="text" class="form-control input-lg" REQUIERED name="curp" size="46" required><br>
            
                    <table>
            <tr>
                <td> <label for="email">Correo:</label><br>
                    <input type="email" class="form-control input-lg" REQUIERED name="email" required><br></td>
                <td><label for="password">Constraseña:</label><br>
                    <input type="password" class="form-control input-lg" REQUIERED name="password" required><br></td>
            </tr>
        </table>
        
        <br>

        <article class="botonesA">
        <button type="submit" class="btn btn-success btn-block" value="Aceptar">Aceptar</button>
        <button>Cancelar</button>
        <button>Modificar</button>
        
    </article>
<br>
    </form>

    <h1 class="texto" align="center">Calificaciones</h1>
<form action="calificaciones_guardar.php" method="POST" class="formulario2" align="center" >

    <table class="calificaciones"  align="center">
        <tr >
          <th class="calificaciones">Materia</th>
          <th class="calificaciones">Bloque I</th>
          <th class="calificaciones">Bloque II</th>
          <th class="calificaciones">Promedio</th>
          <th class="calificaciones">Ordinario</th>
          <th class="calificaciones">Extraordinario</th>
        </tr>
        <tr>
          <td class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="m1" size="10" required></td>
          <td  class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="c" size="3" required></td>
          <td  class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="ca" size="3" required></td>
          
          <td  class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="cali" size="3" required></td>
          <td  class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="calif" size="3" required></td>
          <td  class="calificaciones"><input type="text" class="form-control input-lg" REQUIERED name="califi" size="3" required></td>
          
        </tr>
        <tr>
          <td  class="calificaciones"><input type="text" id="m2" name="m2" size="10"></td>
          <td  class="calificaciones"><input type="text" id="c1" name="c1" size="3"></td>
          <td  class="calificaciones"><input type="text" id="ca1" name="ca1" size="3"></td>
         
          <td  class="calificaciones"><input type="text" id="cali1" name="cali1" size="3"></td>
          <td  class="calificaciones"><input type="text" id="calif1" name="calif1" size="3"></td>
          <td  class="calificaciones"><input type="text" id="califi1" name="califi1" size="3"></td>
        </tr>
        <tr>
            <td class="calificaciones"><input type="text" id="m3" name="m3" size="10"></td>
            <td  class="calificaciones"><input type="text" id="c2" name="c2" size="3"></td>
            <td  class="calificaciones"><input type="text" id="ca2" name="ca2" size="3"></td>

            <td  class="calificaciones"><input type="text" id="cali2" name="cali2" size="3"></td>
            <td  class="calificaciones"><input type="text" id="calif2" name="calif2" size="3"></td>
            <td  class="calificaciones"><input type="text" id="califi2" name="califi2" size="3"></td>
          </tr>
          <tr>
            <td class="calificaciones"><input type="text" id="m4" name="m4" size="10"></td>
            <td  class="calificaciones"><input type="text" id="c3" name="c3" size="3"></td>
            <td  class="calificaciones"><input type="text" id="ca3" name="ca3" size="3"></td>
            <td  class="calificaciones"><input type="text" id="cali3" name="cali3" size="3"></td>
            <td  class="calificaciones"><input type="text" id="calif3" name="calif3" size="3"></td>
            <td  class="calificaciones"><input type="text" id="califi3" name="califi3" size="3"></td>
          </tr>
          <tr>
            <td class="calificaciones"><input type="text" id="m5" name="m5" size="10"></td>
            <td  class="calificaciones"><input type="text" id="c4" name="c4" size="3"></td>
            <td  class="calificaciones"><input type="text" id="ca4" name="ca4" size="3"></td>
            <td  class="calificaciones"><input type="text" id="cali4" name="cali4" size="3"></td>
            <td  class="calificaciones"><input type="text" id="calif4" name="calif4" size="3"></td>
            <td  class="calificaciones"><input type="text" id="califi4" name="califi4" size="3"></td>
          </tr>
          
      </table>
      <br>
      <button type="submit" class="btn btn-success btn-block" value="Aceptar">Aceptar</button>
      <button>Cancelar</button>
      <button>Modificar</button>
      <br>
      
      <h2>Dar de baja al alumno:</h2>
      <button>Baja</button>
</form>
</font>
</body>

</html>