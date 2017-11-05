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
          if (isset($_POST["dni"])) {
            // 1º Calculamos el resto
            $resto = $_POST["dni"] % 23;
            echo $resto;
          } else {
             echo "(escribe el DNI y pulsa Enviar)";
          }
        ?>
      </p>
   </body>
</html>
