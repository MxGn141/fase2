<?php

session_start();

if(!isset($_SESSION['usuario'])){
  echo'
    <script>
      alert("Por favor inicie sesion");
      window.location = "registro.php";
      </script>
      ';
      header("location: registro.php");
      session_destroy();
      die();
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edumind</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <a href="index.html"><img src="../img/logo.png" alt="Edumind"></a>
    <h1>Edumind</h1>
    <h2>Forjando un futuro</h2>
  </header>
  <div class="botones">
      <a href="cerrar.php"><button>Cerrar sesion</button></a>
  </div>
  <main>
    <nav>
		<ul class="menu-horizontal">
			<li><a href="#">Inicio</a></li>
			<li>
				<a href="#">Cursos</a>	
			</li>
			<li>
				<a href="#">Contacto</a>	
			</li>
			<li><a href="../Conocenos.html">Conocenos</a>

            </li>
		</ul>
	</nav>
    <section class="banner">
      <img src="../img/banner.png" alt="Imagen de banner">
       </section>
      <section class="cursos">
      <h2>Cursos destacados</h2>
      <div class="grid-cursos">
        <article class="curso">
          <img src="../img/curso1.jpg" alt="Imagen del curso 1">
          <h3>Introducción al diseño y desarrollo web</h3>
          <p>Aprende los fundamentos del desarrollo web HTML, CSS y JavaScript.</p>
          <br>
          <a href="#">Ver curso</a>
        </article>
        <article class="curso">
          <img src="../img/curso2.jpg" alt="Imagen del curso 2">
          <h3>Desarrollo de Aplicaciones Móviles para Android</h3>
          <p>Aprende a desarrollar apps usando Coldline.</p>
          <br>
          <a href="#">Ver curso</a>
        </article>
        <article class="curso">
          <img src="../img/curso3.jpg" alt="Imagen del curso 3">
          <h3>Desarrollo web con Python</h3>
          <p>Aprende a crear aplicaciones web dinámicas con Python y Django.</p>
          <br>
          <a href="#">Ver curso</a>
        </article>
      </div>
    </section>
    <section class="testimonios">
      <h2>Testimonios</h2>
      <div class="grid-testimonios">
        <div class="testimonio">
          <p>"Edumind me ha ayudado a aprender desarrollo web desde cero. Los cursos son muy completos y los profesores son muy accesibles."</p>
          <strong>- Ana García</strong>
        </div>
        <div class="testimonio">
          <p>"Gracias a Edumind he podido mejorar mis habilidades como desarrollador movil y conseguir un mejor trabajo."</p>
          <strong>- Juan Pérez</strong>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2024 Edumind</p>
    <a href="#">Contacto</a> | <a href="#">Política de privacidad</a>
  </footer>
</body>
</html>
