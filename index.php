<!DOCTYPE html>
<html>
<title>Tabela Fipe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    a{
        text-decoration: none;
        display: block;
    }
</style>
<body>

<div class="w3-container">
  <h2>Tabela FIPE</h2>
  <p>Consultar valor na tabela Fipe:</p>
  <ul class="w3-ul w3-hoverable">
    
    <?php

        $host = 'http://'.$_SERVER['HTTP_HOST'];

        echo "<li><a href='$host/marca.php?tipo=motos'>Motos</a></li>";
        echo "<li><a href='$host/marca.php?tipo=carros'>Carros</a></li>";
        echo "<li><a href='$host/marca.php?tipo=caminhoes'>Camilhões</a></li>";

    ?>
  </ul>
</div>

</body>
</html>