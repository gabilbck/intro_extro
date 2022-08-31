<?php
    include "include/MySql.php";
    include "include/functions.php";

    $total = [
        'total_e' => 0,
        'total_i' => 0,
    ];

    if($_POST['p1'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p2'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p3'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p4'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p5'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p6'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p7'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p8'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p9'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p10'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p11'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p12'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p13'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p14'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    if($_POST['p15'] === 'e'){
        $total['total_e'] += 1;
    } else{
        $total['total_i'] += 1;
    }

    $resultado = $msgErr = "";
    // echo 'total extrovertido'.$total['total_e'].'<br>';
    // echo 'total introvertido'.$total['total_i'].'<br>';
    if($total['total_e'] > $total['total_i']){
        $resultado = '<h1>Extrovertido</h1>';
        $sql = $pdo->prepare("INSERT INTO resultado (resultado) VALUES (?)");
            if ($sql->execute(array(1))){
                $msgErr = "Dados cadastrados com sucesso!";
            } else {
                $msgErr = "Dados não cadastrados!";
            }
    }else{
        $resultado = '<h1>Introvertido</h1>';
        $sql = $pdo->prepare("INSERT INTO resultado (resultado) VALUES (?)");
        if ($sql->execute(array(0))){
            $msgErr = "Dados cadastrados com sucesso!";
        }else{
            $msgErr = "Dados não cadastrados!";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="css/estilo.css" rel="stylesheet">
        <title>INTROVERTIDO OU EXTROVERTIDO? | QUESTIONÁRIO - RESULTADO</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <?php echo $resultado ?>
        </header>
    </body>
</html>