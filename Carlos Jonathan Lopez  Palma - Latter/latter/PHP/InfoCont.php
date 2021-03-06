<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EM - Registro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="manifest" href="/manifest.json">
        <link rel="stylesheet" href="/latter/CSS/estilo.css" type="text/css"/>
		<link rel="stylesheet" href="/latter/CSS/estilo-menu.css" type="text/css"/>
		
    </head>

    <body>
    <?php
        if (isset($_SESSION['loggedin'])) {  
        }
        else {
            echo "<div class='alert alert-danger mt-4' role='alert'>
            <h4>Inicia sesión para acceder a la pagina.</h4>
            <p><a href='http://localhost/latter/login.html'>Iniciar sesión!</a></p></div>";
            exit;
        }
        $now = time();           
        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "<div class='alert alert-danger mt-4' role='alert'>
            <h4>Tu sesión ha terminado!</h4>
            <p><a href='http://localhost/latter/login.html'>Inicia sesión</a></p></div>";
            exit;
        }
    ?>
		<div class="contenedor-menu sidebar">
			<h2 href="" class="btn-menu">Menú<i class=""></i></h2>
			<ul  class="menu">
				<?php 
					if($_SESSION['puesto']=="ADMINISTRADOR"){
						echo '<li><a href="InicioAdmin.php"><i class="icono izq fa fa-home"></i>Inicio</a></li>';
						echo '<li><a href="#"><i class="icono izq fa fa-users"></i>Empleados<i class="icono der fa fa-chevron-down"></i></a>
							<ul>
								<li><a href="ListaEmpleadosPHP.php">Lista de empleados</a></li>
								<li><a href="Reportesphp.php">Lista de reportes</a></li>
								<li><a href="">Registro de empleados</a></li>
							</ul>
						</li>';
					}else{
						echo '<li><a href="InicioUsua.php"><i class="icono izq fa fa-home"></i>Inicio</a></li>';
					}
				?>
				<li><a href=""><i class="icono izq fa fa-user"></i>Usuario<i class="icono der fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="">Datos de contacto</a></li>
						<li><a href="CambioContra.php">Modificar contraseña</a></li>
					</ul>
				</li>
                <?php
                    if($_SESSION['puesto']!="ADMINISTRADOR"){
                        echo('<li><a href="ReportesUsPHP.php"><i class="icono izq fa fa-flag"></i>Reportes</a></li>');
                    }
                ?>
				<li><a href="logout.php"><i class="icono izq fa fa-sign-out-alt"></i>Salir</a></li>
			</ul>
        </div>
        
		<div class="cuerpo">
			<div class="cabecera" style="padding: 8.5px 10px;">
				<i class="fas fa-bars"></i>
			</div>
			<div class="content" style="padding: 40px;">
                <h3 class="encabezado" align="center" style="color:#930707;">Información de contacto</h3>
                <hr>
                <div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="control-label">ID: <?php echo $_SESSION['id']?></p>
                            <p class="control-label">Nombre: <?php echo $_SESSION['name']." ".$_SESSION['ap']?></p>
                        </div>
                        <div class="col-md-4">
                            <p class="label-rep" id="dia"></p>
                        </div>
                    </div>
                    <?php
                        include("ConBD.php");
                        $con=conectar();
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $query="SELECT EMAIL, TELEFONO FROM persona WHERE ID='$_SESSION[id]'";
                        $result=mysqli_query($con,$query);
                        $mo = mysqli_fetch_array($result);
                    ?>
                    <div>
                        <br>
                        <form method="post" action="ActCoTe.php">
                            <div class="form-group col-md-6">
								<label class="control-label" for="Emaill">E-mail</label>
								<input class="control-llenarin" type="email" placeholder="E-MAIL" 
								   id="email" name="email" value=<?php echo $mo['EMAIL'];?> required>
							</div>
                            <div class="form-group form-group col-md-6">
								<label class="control-label" for="Teléfonol">Teléfono</label>
								<input class="control-llenarin" type="numeric" placeholder="TELÉFONO" 
                                    maxlength="10" name="tel" id="tel" onkeypress="return soloNumeros(event)"
                                    value=<?php echo $mo['TELEFONO'];?> required>
							</div>
                            <br>
                            <div class="">
                                <td><button class=" boton btn btn-success"> Editar</button></td>
                            </div>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="/latter/JS/main.js"></script>
</html>