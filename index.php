<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Martín Jesús Mañas Rivas">
  <title>Preferencias del usuario</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
      <legend>Deportes</legend>
      <p>
        <input type="checkbox" name="deportes[]" value="Ciclismo">Ciclismo
        <input type="checkbox" name="deportes[]" value="Senderismo">Senderismo
        <input type="checkbox" name="deportes[]" value="Fútbol">Fútbol
      </p>
    </fieldset>

    <fieldset>
      <legend>Música</legend>
      <p>
        <input type="checkbox" name="musica[]" value="Rock">Rock
        <input type="checkbox" name="musica[]" value="Pop">Pop
        <input type="checkbox" name="musica[]" value="Trap">Trap
        <input type="checkbox" name="musica[]" value="Rap">Rap
      </p>
    </fieldset>

    <fieldset>
      <legend>Programación</legend>
      <p>
        <input type="checkbox" name="programacion[]" value="PHP">PHP
        <input type="checkbox" name="programacion[]" value="JAVA">JAVA
        <input type="checkbox" name="programacion[]" value="PYTHON">PYTHON
      </p>
    </fieldset>

    <p>
      <input type="submit" name="Enviar" value="Enviar">
    </p>

  </form>

</body>

</html>
