<html>
   <head>
     <title>Acceso datos</title>
   </head>
   <body>
      <h1>
       Formulario básico
      </h1>
      <form action="#" method="post">
        <input type="text" name="dni">
        <input type="submit">
      </form>
      <p>
        Tu DNI con letra es:
        <?php
          // Se comprueba primero que es $_POST["dni"] está asignado
          // y luego que es distinto (!=) de la cadena vacía
          if (isset($_POST["dni"]) && $_POST["dni"] != "") {
            // 1º Calculamos el resto
            $resto = $_POST["dni"] % 23;
            // 2º Array de letras
            $tablaLetras[0] = "T"; $tablaLetras[1] = "R";
            $tablaLetras[2] = "W"; $tablaLetras[3] = "A";
            $tablaLetras[4] = "G"; $tablaLetras[5] = "M";
            $tablaLetras[6] = "Y"; $tablaLetras[7] = "F";
            $tablaLetras[8] = "P"; $tablaLetras[9] = "D";
            $tablaLetras[10] = "X"; $tablaLetras[11] = "B";
            $tablaLetras[12] = "N"; $tablaLetras[13] = "J";
            $tablaLetras[14] = "Z"; $tablaLetras[15] = "S";
            $tablaLetras[16] = "Q"; $tablaLetras[17] = "V";
            $tablaLetras[18] = "H"; $tablaLetras[19] = "L";
            $tablaLetras[20] = "C"; $tablaLetras[21] = "K";
            $tablaLetras[22] = "E";
            // 3º Mostramos el DNI con la letra
            $letra = $tablaLetras[$resto];
            echo $_POST["dni"].$letra;
          } else {
             echo "(escribe el DNI y pulsa Enviar)";
          }
        ?>
      </p>
   </body>
</html>
