<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador fake news</title>
</head>
<style>
    .form{
        text-align: center;
    }
    .zap{
        text-align: center;
    }
</style>
<body>
    <form id="formulario" name="formulario" method="post">  
    <div class="form">
        <h3> Digite a primeira letra do seu nome. </h3>
        <h3> Em seguida, digite seu mês e dia de nascimento. </h3>


        <input type="text" name="letra" id="letra">
        <input type="text" name="mes" id="mes">
        <input type="text" name="dia" id="dia">

        <input type="submit">
    </div>

    </form>

</body>

</html>
<?php
$frase= " ";
$vetor1 = [
    "a" => "água com limão",
    "b" => "Bacon",
    "c" => "Cúrcuma",
    "d" => "Doce de leite",
    "e" => "Azeite",
    "f" => "Frango",
    "g" => "Gengibre",
    "h" => "Adoçante",
    "i" => "Açucar",
    "j" => "Jiló",
    "k" => "Comida Japonesa",
    "l" => "Leite",
    "m" => "Macarrão",
    "n" => "Nata",
    "o" => "Ovo",
    "p" => "Pizza",
    "q" => "Óleo de cooc",
    "r" => "Rabanada",
    "s" => "Suco detox",
    "t" => "Sal rosa",
    "u" => "Glutamina",
    "v" => "Jiló",
    "w" => "Peixe",
    "x" => "Própolis",
    "y" => "Kumbucha",
    "z" => "Peixe",
    "A" => "água com limão",
    "B" => "Bacon",
    "C" => "Cúrcuma",
    "D" => "Doce de leite",
    "E" => "Azeite",
    "F" => "Frango",
    "G" => "Gengibre",
    "H" => "Adoçante",
    "I" => "Açucar",
    "J" => "Jiló",
    "K" => "Comida Japonesa",
    "L" => "Leite",
    "M" => "Macarrão",
    "N" => "Nata",
    "O" => "Ovo",
    "P" => "Pizza",
    "Q" => "Óleo de cooc",
    "R" => "Rabanada",
    "S" => "Suco detox",
    "T" => "Sal rosa",
    "U" => "Glutamina",
    "V" => "Jiló",
    "W" => "Peixe",
    "X" => "Própolis",
    "Y" => "Kumbucha",
    "Z" => "Peixe",
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["letra"])) {
        echo  nl2br (" \n ");
        $msg = "Por favor digite a primeira letra de seu nome";
        echo $msg;
    }
    else{
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!empty($_POST["mes"])) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!empty($_POST["dia"])) {
    $frase = $vetor1[$_POST["letra"]];
   }
}
            }
        }
}
}

$vetor2 = [
    "ao acordar",
    "no pré-treino",
    "amassado com limão",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café",
    "Depois das 18h00",
    "antes da aula",
    "misturado na àgua",
    "antes do almoço"
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["mes"])) {
        $msg = "Por favor digite o numero do mes de seu aniversario";
        echo  nl2br(" \n ");
        echo $msg;
    }
 else {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["letra"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["dia"])) {
    if ($_POST["mes"]  == "1") {
        $nome1 = "ao acordar";
        
    }
    if ($_POST["mes"] == "2") {
        if ($_POST["dia"] == "31" || $_POST["dia"] == "30") {
            print "Insira um dia válido\n";
            return 0;
        }
        $nome1 = "amassado com limão";
        
    }
    if ($_POST["mes"]  == "3") {
        $nome1 = "no cabelo";
        
    }
    if ($_POST["mes"]  == "4") {
        if ($_POST["dia"] == "31") {
            print "Insira um dia válido\n";
            return 0;
        }
        $nome1 = "em Jejum";
        
    }
    if ($_POST["mes"]  == "5") {
        $nome1 = "de 3 em 3 horas";
    }
    if ($_POST["mes"]  == "6") {
        if ($_POST["dia"] == "31") {
            print "Insira um dia válido\n";
            return 0;
        }
        $nome1 = "no chá";
        
    }
    if ($_POST["mes"]  == "7") {
        $nome1 = "no café";
        
    }
    if ($_POST["mes"]  == "8") {
        $nome1 = "Depois das 18h00";
        
    }
    if ($_POST["mes"]  == "9") {
        if ($_POST["dia"] == "31") {
            print "Insira um dia válido\n";
            return 0;
        }
        $nome1 = "antes da aula";
        
    }
    if ($_POST["mes"]  == "10") {
        $nome1 = "misturado na àgua";
        
    }
    if ($_POST["mes"]  == "11") {
        if ($_POST["dia"] == "31") {
            print "Insira um dia válido\n";
            return 0;
        }
        $nome1 = "antes do almoço";
        
    }
    if ($_POST["mes"]  == "12") {
        $nome1 = "pré-treino";
        
    }
    if ($_POST["mes"]  > "12") {
        print "Insira um mês válido\n";
    }
}
    }
}
    }
}
}
$vetor3 = [
    "diminiu o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa musculos@",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar"
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["dia"])) {
        $msg = "Por favor digite o numero do dia de seu aniversario";
        echo  nl2br(" \n ");
        echo $msg;
    }
    else{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["letra"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["mes"])) {
        if ($_POST["dia"]  == "1" ||$_POST["dia"]  == "12"||$_POST["dia"]  == "23") {
            $nome2 = "diminiu o inchaço";
             ;
        }
        if ($_POST["dia"]  == "2"||$_POST["dia"]  == "13"||$_POST["dia"]  == "24") {
            $nome2 = "previne infarto";
        }
        if ($_POST["dia"]  == "3"||$_POST["dia"]  == "14"||$_POST["dia"]  == "25") {
            $nome2 ="cura dor de dente";
            ;
        }
        if ($_POST["dia"]  == "4"||$_POST["dia"]  == "15"||$_POST["dia"]  == "26") {
            $nome2 = "limpa o fígado";
             ;
        }
        if ($_POST["dia"]  == "5"||$_POST["dia"]  == "16"||$_POST["dia"]  == "27") {
            $nome2 = "deixa mais inteligente";
             ;
        }
        if ($_POST["dia"]  == "6"||$_POST["dia"]  == "17"||$_POST["dia"]  == "28") {
            $nome2 = "limpa as artérias";
             ;
        }
        if ($_POST["dia"]  == "7"||$_POST["dia"]  == "18"||$_POST["dia"]  == "29") {
            $nome2 = "deixa musculos@";
             ;
        }
        if ($_POST["dia"]  == "8"||$_POST["dia"]  == "19"||$_POST["dia"]  == "30") {
            $nome2 = "fortalece a unha";
             ;
        }
        if ($_POST["dia"]  == "9"||$_POST["dia"]  == "20"||$_POST["dia"]  == "31") {
            $nome2 =  "da azar";;
        }
        if ($_POST["dia"]  == "10"||$_POST["dia"]  == "21") {
            $nome2 = "mata";
             ;
        }
        if ($_POST["dia"]  == "11"||$_POST["dia"]  == "22") {
            $nome2 = "dá sorte";
            ;
        }
    }
}
}
        }
    }
}
?>
<html>
    <div class="zap" >
    <?php
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["letra"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["mes"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST["dia"])) {
    echo $frase . " " . $nome1 . " " . $nome2 . ".";}}}}}}
    ?>
    </div>
</html>
