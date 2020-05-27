<!DOCTYPE html>
    <head>
	 <link rel="stylesheet" type="text/css" href="Style.css" />
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <title>CREAR</title>
	</head>
	<body>
	  
	    <div align="center" id="VENTAS">
		  <h1>CREAR USUARIO</h1>
	    </div>
		<div>		   
		   <div class="text-black">
		   <form method="GET" action="registrar.php">
		    <div class="form-group">
			  <label for="nombre" >NOMBRE</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" required>
			</div>
			<div class="form-group">
			  <label for="apellido" >NOMBRE</label>
              <input type="text" name="apellido" class="form-control" placeholder="Ingrese Apellido" required>
			</div>
			<div class="form-group">
			  <label for="usuario" >NOMBRE</label>
              <input type="text" name="usuario" class="form-control" placeholder="Ingrese Usuario" required>
			</div>
			<div class="form-group">
			  <label for="clave">CLAVE</label>
              <input type="password" class="form-control" name="clave" placeholder="Ingrese Clave" required>
			</div>          
			<div class="form-group" align="center">
			  <input type="submit" value="REGISTRAR" class="btn btn-primary btn-lg" required>
			</div>
			
          </form>
		   
		</div>      
	</body>
</html>