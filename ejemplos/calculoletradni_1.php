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
             echo $_POST["dni"];
          } else {
             echo "(escribe el DNI y pulsa Enviar)";
          }
        ?>
      </p>
   </body>
</html>
