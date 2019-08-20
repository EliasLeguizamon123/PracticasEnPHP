<?php
  //Definir las variables para hacer la conexión con la base de datos.
  $usuario = "root";
  $contraseña = "";
  $servidor = "localhost";
  $baseDeDatos = "personas";
  //Conectar la base de datos dentro de la variable $conexion.
  $conexion = mysqli_connect($servidor, $usuario, "") or die ("Error");
  //Seleccionar que bd voy a utilizar.
  $bd = mysqli_select_db($conexion, $baseDeDatos) or die ("Error al conectar con la BD.");
  //Hacer consultas a la BD que estoy utilizando.
  $consulta = "SELECT * FROM personas";
  $resultado = mysqli_query($conexion, $consulta) or die ("Error en consultar datos.");
  echo "<table border = '2'>";
  echo "<tr>";
  echo "<th>Nombre</th>";
  echo "<th>Apellido</th>";
  echo "</tr>";
  //Mientras existan n registros dentro de las columnas de 'personas' van a mostrarse como celdas en una tabla
  while($columna = mysqli_fetch_array($resultado)){
      echo "<tr>";
      echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['apellido'] . "</td>";
      echo "</tr>";
  }
?>
