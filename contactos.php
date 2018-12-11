    <?php include ('php/header.php'); ?>

    <div class="container__contactos">
        <div  class="login-box">
          <div class="loginbox1">
              <h1> REGISTRE SUS DATOS  </h1 >
                <form action="registrar.php" method="post">
                    <div class="form1">
                      <label class="lebel1"> ESCRIBA SU NOMBRE </label>
                      <input class="input1" type="text" name="nombre" required >
                      <label class="lebel2"> CORREO </label >
                      <input class="input2"  type="email" name="correo" required>
                    </div>
                    <div class="form2">
                      <label class="lebel1"> ESCRIBA SU APELLIDO </label>
                      <input class="input1" type="text" name="apellido" required>
                      <label class="lebel2"> TELEFONO O CELULAR </label >
                      <input class="input2" type="tel"  name="telefono" pattern="[0-9]{9}" required >
                    </div>
                    <div class="form3">
                      <label class="lebel2">ESCRIBA UN MENSJE</label >
                      <input class="input2" type="text" name="mensaje" required>
                    </div>
                    <input class="input3" type="submit" name="submit" value="ENVIAR"><br>
                    <a href="#">perdido su contraseña?</a><br>
                    <a href="#">¿Todavía no tienes una cuenta?</a>
                </form >
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
    
    <?php include ('php/footer.php'); ?>