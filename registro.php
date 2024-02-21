<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/stylereg.css">
</head>
<body>
<header>
    <a href="index.html"><img src="img/logo.png" alt="Edumind"></a>
  </header>
        <main>
        <nav>
      <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
  <i class="fas fa-bars"></i>
  </label>
      <ul>
        <li><a href="index.html" class="active" href="#">Inicio</a></li>
        <li><a href="cursos.html">Cursos</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="Conocenos.html">Conocenos</a></li>
      </ul>
    </nav>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <script src="codigo/script.js"></script>
        <footer class="footer">

<div class="container">

  <div class="footer-row">
  
      <div class="footer-links">
          <h4>Empresa</h4>
          <ul>
            <li><a href="Conocenos.html">Valores</a></li>
            <li><a href="Conocenos.html">Mision</a></li>
            <li><a href="Conocenos.html">Vision</a></li>
            <li><a href="Conocenos.html">Objetivos</a></li>
          </ul>
      </div>
      <div class="footer-links">
        <h4>Cursos</h4>
        <ul>
          <li><a href="cursos.html">Programacion</a></li>
          <li><a href="cursos.html">Edicion</a></li>
          <li><a href="cursos.html">Creatividad</a></li>
        </ul>
    </div>
    <div class="footer-links">
      <h4>Informacion</h4>
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="contacto.html">Politica de privacidad</a></li>
        <li><a href="registro.php">Afiliate</a></li>
      </ul>
  </div>
  <div class="footer-links">
    <h4>Siguenos</h4>
    <div class="social-link">
        <a href="https://www.instagram.com/eduminddigital" target="_blank" title="Instagram">
          <img src="img/insta.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/usuario_facebook" target="_blank" title="Facebook">
          <img src="img/face.png" alt="Facebook">
        </a>
        <a href="https://twitter.com/usuario_twitter" target="_blank" title="Twitter">
          <img src="img/x.png" alt="Twitter">
        </a>
      
    </div>
    <br>
    <br>
    <p>Copyright &copy; 2024 Edumind</p>
</div>

  </div>

</div>

</footer>
</body>
</html>
