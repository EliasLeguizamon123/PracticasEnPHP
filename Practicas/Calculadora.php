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
    <!--   -Formulario de HTML donde se vuelca toda la información------------->
    <h2>Calculadora Simple</h2>
    <p><span class="textoRojo">* Ingrese 2 numeros enteros</span></p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <select name="operador">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicaci&oacute;n</option>
        <option value="division">Divisi&oacute;n</option>
      </select><br/>
      Ingresa tu primer número:<br />
      <input type="text" name="valor1"><br />
      Ingresa tu segundo valor:<br />
      <input type="text" name="valor2"><br>
      <input type="reset" value="Borrar">
      <input type="submit" value="Enviar">
    </form>
    <?php
    	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
    		if ($_POST["operador"] == "suma") {
    			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
    			print ('<br /><a href="ejercicios.php">Volver</a>');     //Esta opcion vuelve a la pagina inicial para calcular.
    		} elseif ($_POST["operador"] == "resta") {
    			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
    			print ('<br /><a href="ejercicios.php">Volver</a>');     //Esta opcion vuelve a la pagina inicial para calcular.
    		} elseif ($_POST["operador"] == "multiplicacion") {
    			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
    			print ('<br /><a href="ejercicios.php">Volver</a>');     //Esta opcion vuelve a la pagina inicial para calcular.
    		} elseif ($_POST["operador"] == "division") {
    			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
    			print ('<br /><a href="ejercicios.php">Volver</a>');     //Esta opcion vuelve a la pagina inicial para calcular.
    		}
    	} else {
    		print("Ingresa algún valor");
    		print ('<br /><a href="ejercicios.php">Volver</a>');
    	}
    ?>
    </body>
</html>
