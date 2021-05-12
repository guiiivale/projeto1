<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grau anjo</title>
</head>
<style>
    .form {
        text-align: center;
    }
</style>

<body>
    <form id="formulario" name="formulario" method="post">
        <div class="form">
            <h3> Calcule seu grau de anjo e não anjo. Digite o dia, o mês e o ano de seu nascimento:</h3>


            <input type="number" name="dia" id="dia">
            <input type="number" name="mes" id="mes">
            <input type="number" name="ano" id="ano">

            <input type="submit">
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (empty($_POST["dia"])) {
                    echo  nl2br(" \n ");
                    $msg = "Por favor digite o dia de seu nascimento";
                    echo $msg;
                } else if (empty($_POST["mes"])) {
                    echo  nl2br(" \n ");
                    $msg = "Por favor digite o mês de seu nascimento";
                    echo $msg;
                } else if (empty($_POST["ano"])) {
                    echo  nl2br(" \n ");
                    $msg = "Por favor digite o ano de seu nascimento";
                    echo $msg;
                } else if (!empty($_POST["dia"])) {
                    if ($_POST["dia"] > 31){
                        echo  nl2br(" \n ");
                        echo 'Digite um dia válido';
                        return 0;
                    }
                    if (!empty($_POST["mes"])) {
                        if ($_POST["mes"]  > "12") {
                            echo  nl2br(" \n ");
                            print "Insira um mês válido\n";
                            return 0;
                        }
                        if (!empty($_POST["ano"])) {
                           if($_POST["ano"] > 2021){
                            echo  nl2br(" \n ");
                                echo 'Ainda estamos em 2021, digite um ano válido';
                                return 0;
                            }
                            if ($_POST["mes"] == "2") {
                                if ($_POST["dia"] == "31" || $_POST["dia"] == "30") {
                                    print "Insira um dia válido\n";
                                    return 0;
                                }
                            }
                            if ($_POST["mes"]  == "4") {
                                if ($_POST["dia"] == "31") {
                                    print "Insira um dia válido\n";
                                    return 0;
                                }
                            }
                            if ($_POST["mes"]  == "6") {
                                if ($_POST["dia"] == "31") {
                                    print "Insira um dia válido\n";
                                    return 0;
                                }
                            }
                            if ($_POST["mes"]  == "9") {
                                if ($_POST["dia"] == "31") {
                                    print "Insira um dia válido\n";
                                    return 0;
                                }
                            }
                            if ($_POST["mes"]  == "11") {
                                if ($_POST["dia"] == "31") {
                                    print "Insira um dia válido\n";
                                    return 0;
                                }
                            }

                            $dia = $_POST["dia"];
                            $mes = $_POST["mes"];
                            $ano = $_POST["ano"];
                            if ($mes == 1){
                                $safadeza = $mes + ($ano/1000) * (50-$dia);
                                $anjo = 100 - $safadeza;
                                echo  nl2br(" \n ");
                                echo 'Seu grau de anjo é: '. $anjo;
                                echo  nl2br(" \n ");
                                echo 'Seu grau de safadeza é: '. $safadeza;
                            }
                            else{
                                $somatario = $mes;
                                for ($i=$mes; $i > 0 ; $i--) { 
                                    $somatario = $somatario + $i - 1;
                                }       
                                echo  nl2br(" \n ");
                                echo $somatario;
                                $safadeza = $somatario + ($ano/1000) * (50-$dia);
                                $anjo = 100 - $safadeza;
                                echo  nl2br(" \n ");
                                echo 'Seu grau de anjo é: '. $anjo;
                                echo  nl2br(" \n ");
                                echo 'Seu grau de safadeza é: '. $safadeza;}
                        }
                    }
                }
            }
            ?>
        </div>

    </form>

</body>

</html>
