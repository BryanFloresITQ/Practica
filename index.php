<head>
<link rel="stylesheet" type="text/css" href="css/formatos.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    
    <form class="login-form" action="" method="POST">
      <input type="text" placeholder="cedula"/ name="cedula">
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" value="enviar" name="enviar">login</button>
      <p class="message">No registrado? <a href="registro.php">Crea una cuenta</a></p>
    </form>
  </div>
</div>

</body>

<?php

if(isset($_POST['enviar']))
{

require './recursos/conexion.php';
require_once './recursos/funciones.php';

$password = $_POST['password'];
$cedula = $_POST['cedula'];

$resultado = traer_datos($conexion, $cedula, $password);

if (!is_null($resultado)) {

    foreach ($resultado as $key => $value) {
        print "$key => $value\n";
    }

}
else{
    echo '<script language="javascript">alert("NO Encontrado");</script>'; 
}

}