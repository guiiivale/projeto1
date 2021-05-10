<html>
<form method="GET">

    <input type="text" name="campo_cidade" id="campo_cidade" accept="text"> <br>
    <input type="submit">

</form>

</html>
<?php
$teste = "";
const ID = "Uf5WPNaWeVytYPIYjvEWN";
const SECRET = "zIdPW98jgMZCngez8p5RrBsARa6M8SgZ2WI7o4hK";
const BASE_URL = "https://api.aerisapi.com/conditions/";
if (isset($_GET['campo_cidade']) ) {
    $teste = $_GET['campo_cidade'];
$cidade = $_GET['campo_cidade'];
$cidade = urlencode($cidade);
$url = BASE_URL . "[{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;
$json = file_get_contents($url);
$dadosmet = json_decode($json, true);
$temperatura = $dadosmet['response'][0]['periods'][0]['tempC'];
$sensacao = $dadosmet['response'][0]['periods'][0]['feelslikeC'];
$velocidade = $dadosmet['response'][0]['periods'][0]['humidity'];
$umidade = $dadosmet['response'][0]['periods'][0]['windSpeedKPH'];
$nome =  $dadosmet['response'][0]['place']['name'];
include 'clima.php';}
else
echo 'Digite a cidade'
?>
