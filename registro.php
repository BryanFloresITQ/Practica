<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/formatos.css" />
    <title>Document</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="guardarRegistro" method="POST">
      <input type="text" placeholder="nombre" name="nombre"/>
      <input type="text" placeholder="cedula" name="cedula"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" value="enviar">Crear</button>
      <p class="message">Ya registrado? <a href="index.php">Login</a></p>
    </form>
    </div>
</div>
</body>
</html>