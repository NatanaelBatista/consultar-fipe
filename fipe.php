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
  <button class="w3-button w3-light-grey w3-border"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>">Início</a></button>
  <br>
  <br>
  <ul class="w3-ul w3-hoverable">
    
    <?php
    
    $host = 'http://'.$_SERVER['HTTP_HOST'];
    $tipo = $_GET['tipo'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $ano = $_GET['ano'];
    $url = "https://parallelum.com.br/fipe/api/v1/$tipo/marcas/$marca/modelos/$modelo/anos/$ano";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = json_decode(curl_exec($ch));

    echo '<li>'.$data->Marca.'</li>';
    echo '<li>'.$data->Modelo.'</li>';
    echo '<li>'.$data->AnoModelo.'</li>';
    echo '<li>'.$data->Combustivel.'</li>';
    echo '<li>'.$data->Valor.'</li>';

    ?>
  </ul>
</div>

</body>
</html>