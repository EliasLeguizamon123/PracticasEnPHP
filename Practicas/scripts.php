<html>
  <body>
    <?php
    $numero1 = 0;
    $numero2 = 0;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["numero1"])) {
        $numero1 = "Ingrese un numero entero";
      } else {
        $nombre = $_POST["numero1"];
        if (!preg_match("/^[0-9999999]*$/",$numero1)) {
          $numero1 = "No ingresó ningún número entero";
        }
      }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["numero1"])) {
      $numero1 = "Ingrese un numero entero";
    } else {
      $nombre = $_POST["numero2"];
      if (!preg_match("/^[0-9999999]*$/",$numero2)) {
        $numero2 = "No ingresó ningún número entero";
      }
    }
  }
    ?>
    <input type="text" name="numero1" placeholder="Ingrese un numero entero." value= "<?php echo $numero1;?>">
    <input type="text" name="numero2" placeholder="Ingrese un numero entero." value= "<?php echo $numero2;?>">
    <input type="submit" name="submit" value="Sumar!">

  <?php
      $resultado = $numero1 + $numero2;
      echo "$resultado";
  ?>
</body>
</html>
