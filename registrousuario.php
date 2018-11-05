<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
     <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu apellido</b></label>
      <input type="text" name="apellido" class="form-control" placeholder="Ingresa tu apellido" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="correo" class="form-control"  required placeholder="Ingresa tu correo"/>
    </div>
     <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu rut</b></label>
      <input type="text" name="rut" class="form-control" placeholder="Ingresa tu rut" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
<!--Fin formulario registro -->

</body>
</html>