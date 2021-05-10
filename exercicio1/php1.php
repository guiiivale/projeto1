<?php
const URL = "https://pokeapi.co/api/v2/pokemon/";
$pokemons = [];
for ($i = 1; $i < 16; $i++) {
    $id = $i;

    $url = URL . $id;

    $resul = file_get_contents($url);
    $pokematriz = json_decode($resul, true);

    $pokemons[$id]['nome']  = $pokematriz['forms'][0]['name'];
    $pokemons[$id]['peso'] = $pokematriz['weight'];
    $pokemons[$id]['altura'] = $pokematriz['height'];
    $pokemons[$id]['habilidades'] = $pokematriz['abilities'];
    $pokemons[$id]['imagem'] = $pokematriz['sprites']['other']['dream_world']['front_default'];
}

?>
<!DOCTYPE html>
<html lang="en">
<title> Pokemon </title>
<style>
    .card {
        width: 200px;
        height: 450px;
        border: solid 1px #ddd;
        position: relative;
        float: left;
        padding: 10px;
    }

    .card {
        text-align: center;
    }

    img {
        max-width: 100%;
    }
</style>

<body>
    <?php foreach ($pokemons as $poke) : ?>

        <div class="card">
            <img src="<?= $poke['imagem'] ?>" alt="">
            <h3>Nome: <?= $poke['nome'] ?>.</h3>
            <p>Altura: <?= $poke['altura'] ?> Cm</p>
            <p>Peso: <?= $poke['peso'] ?> gramas.</p>
            <p>Habilidades:
            </p>
            <ul>
                <?php foreach ($poke['habilidades'] as $hab) : ?>
                    <li style="text-align: left;" >
                        <?= $hab['ability']['name'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach ?>
</body>

</html>