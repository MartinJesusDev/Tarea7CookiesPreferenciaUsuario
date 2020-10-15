<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Martín Jesús Mañas Rivas">
  <title>Preferencias del usuario</title>
</head>

<body>
  <h1>Formulario de prefencias</h1>
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

  <?php
    if(isset($_POST['Enviar'])){
      setcookie('preferencias', 'true', strtotime('+2 hours'));

      if(isset($_POST['deportes'])){
        $deportes = $_POST['deportes'];

        foreach($deportes as $deporte){
          setcookie('deportes[]', $deporte, strtotime('+2 hours'));
        }
      }


      if(isset($_POST['musica'])){
        $musica = $_POST['musica'];

        foreach($musica as $genero){
          setcookie('musica[]', $genero, strtotime('+2 hours'));
        }
      }

      if(isset($_POST['programacion'])){
        $prog = $_POST['programacion'];

        foreach($prog as $lenguaje){
          setcookie('programacion[]', $lenguaje, strtotime('+2 hours'));
        }
      }

      header('Location: index.php');
      exit();
    }

    if(isset($_COOKIE['preferencias'])){
      echo "<h2>Gustos del usuario</h2>";
      echo "<hr>";


      echo "<ul><li>Deportes:</li>";
      if(isset($_COOKIE['deportes'])){
        $deportes = $_COOKIE['deportes'];

        echo "<ul>";
        foreach($deportes as $deporte){
          echo "<li> $deporte </li> ";
        }
        echo "</ul>";
      } else {
        echo "<ul><li>No le gusta ninguna</li></ul>";
      }

      echo "<li>Música:</li>";
      if(isset($_COOKIE['musica'])){
        $musica = $_COOKIE['musica'];

        echo "<ul>";
        foreach($musica as $genero){
          echo "<li> $genero </li> ";
        }
        echo "</ul>";
      } else {
        echo "<ul><li>No le gusta ninguna</li></ul>";
      }

      echo "<li>Programación:</li>";
      if(isset($_COOKIE['programacion'])){
        $prog = $_COOKIE['programacion'];

        echo "<ul>";
        foreach($prog as $lenguaje){
          echo " <li> $lenguaje </li> ";
        }
        echo "</ul>";
      } else {
        echo "<ul><li>No le gusta ninguna</li></ul>";
      }
      echo "</ul>";

    }
  ?>
</body>

</html>
