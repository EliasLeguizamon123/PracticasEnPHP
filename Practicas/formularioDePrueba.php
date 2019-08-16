<?php
  /*---------------------------------------While
  $contador = 0;
  while($contador < 10){
    echo "contador vale $contador <br/>";
    $contador++;
  }
  echo "contador vale $contador";
  -----------------------------------------
  */?>
<!DOCTYPE HTML>
<html>
  <head>
    <style>
      .textoRojo{
        color: #FF0000;
      }
    </style>
  </head>
  <body>
    <?php
      //Inicializacion de variables vacias
      $nombre = "";
      $apellido = "";
      $nombreI = "";
      $apellidoI = "";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nombre"])){
          $nombreI = "Ingrese su nombre.";
        } else {
          $nombre = $_POST["nombre"];
          if (!preg_match("/^[a-zA-Z]*$/", $nombre)) {
            $nombreI = "El nombre solo puede tener letras y espacios.";
          }
        }
        if (empty($_POST["apellido"])) {
          $apellidoI = "Ingrese su apellido.";
        } else {
          $apellido = $_POST["apellido"];
        }
      }
    ?>

    <h2>Formulario de prueba.</h2>
    <p><span class="textoRojo">* Obligatorio</span></p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
      <span class="textoRojo">* <?php echo $nombreI;?></span>
      <br><br>
      Apellido: <input type="text" name="apellido" value="<?php echo $apellido;?>">
      <span class="textoRojo">* <?php echo $apellidoI;?></span>
      <input type="submit" name="submit" value="Enviar!">
    </form>

    <?php
        echo "<br>";
        echo $nombre;
        echo "<br>";
        echo $apellido;
        echo "<br>";
     ?>
    </body>
</html>
