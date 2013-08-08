<!DOCTYPE html PUBLIC 
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Caja Menor</title>
<link rel="stylesheet" type="text/css" href="lib/css/normalize.css">
<link rel="stylesheet" type="text/css" href="lib/css/estilo_pp.css">
</head>

<body>
  <header>
    <figure id="logo_empresa">
      <img src="imagenes/logo.jpg">
    </figure>
    <h1 id="titulo_header">Manejo de Caja Menor</h1>
   </header>
   <section id="contenido">
    <h2>Por Favor Inicia Sesion para Continuar</h2>
    <section id="form_login">
      <form id="login" action="bin/modules/login/login.php" method="post">
        <p id="email">
         <label for="i_email">Email:</label>
         <input id="i_email" name="i_email" type="email"></input>
        </p>
        <p id="pass">
         <label for="i_pass">Contraseña:</label>
         <input id="i_pass" name="i_pass"type="password"></input>
         </p>
        <input id="btn_login" type="submit" value="Ingresar"/>
      </form>
       <a id="restaurar_pass"href="bin/modules/login/restaurar_pass.php">Olvide Mi Contraseña</a>
    </section>
     
        <a id="registrar_btn" href="#">Solicitar Registro</a>
  </section>
  <footer>
    <p>Diseñado Por: <a href="http://sispopayan.com">Darwin Manchola</a></p>
  </footer>
</body>
</html>