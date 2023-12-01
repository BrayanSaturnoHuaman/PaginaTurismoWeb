<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logeo y registro</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="RAIZ/CSS/Logueo.css">
    <link rel="apple-touch-icon" sizes="180x180" href="IMAGENES/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGENES/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="IMAGENES/favicon-16x16.png">
</head>
<body>
  <div class="container" id="container">

    <div class="form-container register-container">

      <form action="php/registro_usuario_bd.php" method='POST'>
        
      <!-- Es el acciona el almacenamineto de los datos de registro en la base de datos y el metodo POST envia los datos-->
        <h1>Registrarse</h1>
        <input type="text" placeholder="Nombre">
        <input type="email" placeholder="Correo">
        <input type="text" placeholder="Usuario">
        <input type="password" placeholder="Clave">
        <button>Registrar</button>
        <span>o usa tu cuenta</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>
          <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
        </div>
      </form>
    </div>

    <div class="form-container login-container">
      <form action="php/login_usuario_bd.php" method='POST'>
        <h1>Iniciar sesion</h1>
        <input type="email" placeholder="Correo">
        <input type="password" placeholder="Clave">
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>Recordar</label>
          </div>
          <div class="pass-link">
            <a href="#">¿Olvidaste la contraseña?</a>
          </div>
        </div>
        <button>Ingresar</button>
        <span>o usar tu cuenta</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>
          <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
        </div>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">Hola <br> amigo</h1>
          <p>Si tienes una cuenta, inicia sesion aqui y diviertete</p>
          <button class="ghost" id="login">Ingresar
            <i class="lni lni-arrow-left login"></i>
          </button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="title">Comienza tu<br> viaje ahora</h1>
          <p>Si aun no tienes una cuenta, unete a nosotros y comienza tu viaje
          <button class="ghost" id="register">Registrarse
            <i class="lni lni-arrow-right register"></i>
          </button>
        </div>
      </div>
    </div>

  </div>

  <script src="RAIZ/JAVASCRIPT/scriptlog.js"></script>
  <script src="RAIZ/JAVASCRIPT/scriptlog1.js"></script>

</body>
</html>