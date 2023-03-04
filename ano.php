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
    $tipo = $_GET['tipo'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $url = "https://parallelum.com.br/fipe/api/v1/$tipo/marcas/$marca/modelos/$modelo/anos";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = json_decode(curl_exec($ch));

    foreach ($data as $value) {

        echo "<li><a href='$host/fipe.php?tipo=$tipo&marca=$marca&modelo=$modelo&ano=$value->codigo'>$value->nome</a></li>";
    }

    ?>
  </ul>
</div>

</body>
</html>