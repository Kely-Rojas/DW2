<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuel C. Bernal</title>
    <link rel="stylesheet" href="css/estilos.css">
    <!--indicar la ruta de los estilos en css-->
</head>

<body background="Img/secundaria.jpg" style="width:100%;height:100%;">
    <font face="Arial">
    <h1 style="text-align:center;font-size:320%;"> <img align="left" src="Img/logo.svg" alt="Imágen de ejemplo"
            style="width:50px;height:60px;">
        Manuel C. Bernal</h1>
    <nav>
        <a href="file:///C:/Users/Tempo/Documents/HTML/Escuela/Ingresar_alumnos.html" class="nav-enlace">Alumnos</a>
        <a href="http://localhost/escuela/Inicio.php" class="nav-enlace">Cerrar sesión</a>
    </nav>
    <form>
        <label for="id">Administrador:</label><br>
        <input type="text" id="id" name="id">
        </form>

    <h1 class="texto" align="center">Ingresar profesores</h1>

    <form action="profesores_guardar.php" method="POST" class="formulario">
        <br>

        <label for="identificador">Identificador:</label><br>
        <input type="text" class="form-control input-lg" REQUIERED name="identificador" size="46" required><br>

        <label for="name">Nombre(s):</label><br>
        <input type="text" class="form-control input-lg"  REQUIERED name="name" size="46" required><br>



        <table>

            <tr>
                <td><label for="Pa">Primer apellido:</label><br>
                    <input type="text" class="form-control input-lg"  REQUIERED name="Pa" required><br></td>
                <td><label for="Sa">Segundo apellido:</label><br>
                    <input type="text" class="form-control input-lg"  REQUIERED name="Sa" required><br></td>
            </tr>
            <tr>
                <td>
                    <label for="Dir">Dirección:</label><br>
                    <input type="text" class="form-control input-lg"  REQUIERED name="Dir" required><br></td>
                <td><label for="Tel">Teléfono:</label><br>
                    <input type="text" class="form-control input-lg"  REQUIERED name="Tel" required><br></td>
            </tr>
        </table>



        <table>
            <tr>
                <td> <label for="email">Correo:</label><br>
                    <input type="email" class="form-control input-lg"  REQUIERED name="email"required><br></td>
                <td><label for="password">Constraseña:</label><br>
                    <input type="password" class="form-control input-lg" REQUIERED name="password" required><br></td>
            </tr>
        </table>
        <br>
    
        <article class="botonesB">
            <button type="submit" class="btn btn-success btn-block" value="Aceptar">Aceptar</button>
            <button>Cancelar</button>
        </article>
        <br>
    </form>
</font>


</body>

</html>