<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">  
     body{
       text-align: center;
     }
     .login{
       background-color: skyblue;
     }     
     .mensaje{
       background: blue;
       color: white;
     }
  </style>
</head>
<body>
  <section>
  	<div class="login">
      <h1>LOGIN</h1>
  		<form action="<?php  echo constant('URL') ?>login/validarUsuarios" method="POST">
        <div class="center mensaje"><?php echo $this->mensaje;?></div><br>
  			<label>DNI:</label>
  			 <input type="number" name="dni" placeholder="inserte su dni" required=""><br><br>
  		  <label>N° medidor:</label>
         <input type="text" name="medidor" placeholder="inserte numero de medidor" required=""><br><br>
        <label>Clave:</label>
  			 <input type="password" name="clave" placeholder="inserte su clave" required=""><br><br>
  			<input type="submit" value="INICIAR">
  		</form>
      <br>
      <a href="reguistrar">REGISTRARSE</a>
  	</div>
  </section>
</body>
</html>