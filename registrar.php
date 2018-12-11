<?php include ('php/header.php'); ?>

<body>
   
    <div class="container__contactos">
        <div  class="login-box">
          <div class="loginbox1">
        <?php
        // hace la conexion a la base de datos
        function Conectarse(){
          if (!($conexion=mysqli_connect("localhost","root","jhoselin"))){
          exit();
          }
          if (!mysqli_select_db($conexion,"fusenperu"))
          {
          exit();
          }
          return $conexion;
        }
        $conexion = Conectarse();
        // asigna en las variables los datos enviados del formulario
        $nombre = $_POST["nombre"];
				$correo = $_POST["correo"];
				$apellido = $_POST["apellido"];
				$telefono = $_POST["telefono"];
				$mensaje = $_POST["mensaje"];

				/*
				//verifica que en la base de datos ya exista otro apellido igual
				$verificar = mysqli_query($conexion , "SELECT * FROM usuarios WHERE apellidos = '$apellido'");
				if (mysqli_num_rows($verificar) > 0) {
					echo "<p class='registrar0'>hay apellidos coincidentes con el mismo nombre </p>"."<br>";
				}
				//verifica que en la base de datos ya exista otro telefono igual
				$verificar = mysqli_query($conexion , "SELECT * FROM usuarios WHERE telefono = '$telefono'");
				if (mysqli_num_rows($verificar) > 0) {
					echo "<p class='registrar0'>EL telefono  ya existe igrese otro telefono </p>"."<br>";
				}
				//verifica que en la base de datos si  exista otro correo  igual
				$verificar = mysqli_query($conexion , "SELECT * FROM usuarios WHERE correo = '$correo'");
					if (mysqli_num_rows($verificar) > 0) {
					echo "<p class='registrar0'>su e-mail  ya existe  ingrese otra cuenta</p>"."<br>";
				}*/
				
				$insertar = "INSERT INTO usuarios(nombres , apellidos, correo, telefono , mensaje) VALUES ('$nombre', '$apellido','$correo' , '$telefono','$mensaje')";

				$resultado = mysqli_query($conexion , $insertar);
				if (!$resultado) {
					echo "<p class='registrar0'>Error al registrarse</p>"."<br>";
				}else{
					echo "<h1 id='registrar1'>gracias por registrarte</h1>". "<br>";
				}
				mysqli_close($conexion)
              ?>
              <?php
              	//echo "<input type='submit' name='registrar3' value='Aceptar' onClick='history.back()'>";
              	echo "<p id='registrar2'><a id='registrar3'  href='contactos.php'>Aceptar</a></p>";
              ?>
            
          </div>
          <div class="loginbox2">
            <h1 class="icondatabase">CONTACTOS FUSEN</h1>
                <img  src="img/contact-house.jpg">
                <h3>UBICANOS</h3>
                <p>C.C Real plaza nvo hall, huaraz perú <br> Urb villa calle 200 , chorrillos lima</p>
                <img  src="img/contact-wsp.jpg">
                <h3>CONTACTENOS</h3>
                <p >01 8473 832     <span></span>   +51 98737383</p>
                <img src="img/contact-sms.jpg">
                <h3>ESCRIBANOS</h3>
                <p>fusen@hotmail.com</p><br> 
          </div>
        </div>
    </div>
</body>
</html>