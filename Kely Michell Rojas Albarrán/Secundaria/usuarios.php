<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Manuel C. Bernal</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
	<link rel="stylesheet" href="css/estilos.css">
  </head>

  <body>
	<font face="Arial">
	<h1 style="text-align:center;font-size:320%;"> <img align="left" src="Img/logo.svg" alt="Imágen de ejemplo"
		style="width:50px;height:60px;">
	Manuel C. Bernal</h1>
	<nav>
		<a href="http://localhost/escuela/Inicio.php" class="nav-enlace" >Inicio</a>
		</nav>
<br>
<br>
<br>
	  <center>
		<div class="container-fluid">
				<div class="col-lg-3" >	
					<div class="card">
						<div class="loginBox" >
							<center ><img src="Img/usuario.png" class="img-responsive"  ></center>
							
							<center><h2>Control escolar</h2></center>
							
							<form action="usuarios_guardar.php" method="post" >                           	
								<div class="form-group" >									
									<input  type="email" class="form-control input-lg" REQUIERED name="email" placeholder="Correo" required>        
								</div>							
								<div class="form-group">        
									<input type="password" class="form-control input-lg" REQUIERED name="password" placeholder="Contraseña" required>       
								</div>								    
									<button style="background: black; color: white;" type="submit" class="btn btn-success btn-block"  value="Aceptar" href="http://localhost/escuela/Ingresar_profesores.php"> Ingresar</button>
							</form>
											
													
						</div><!-- /.loginBox -->	
					</div><!-- /.card -->
				</div><!-- /.col-->
			
		</div><!-- /.container -->
</center>



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
		</font>
	</body>
</html>	