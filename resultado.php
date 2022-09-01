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

    $resultado = $msgErr = $desc = "";
    // echo 'total extrovertido'.$total['total_e'].'<br>';
    // echo 'total introvertido'.$total['total_i'].'<br>';
    if($total['total_e'] > $total['total_i']){
        $resultado = '<h1 id="extro">Extrovertido</h1>';
        $desc = '<p>Descrição do extrovertido</p>';
        $sql = $pdo->prepare("INSERT INTO resultado (resultado) VALUES (?)");
            if ($sql->execute(array(1))){
                $msgErr = "Dados cadastrados com sucesso!";
            } else {
                $msgErr = "Dados não cadastrados!";
            }
    }else{
        $resultado = '<h1 id="intro">INTROVERTIDO</h1>';
        $desc = '<p>Descrição do introvertido</p>';
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
    <!-- <body>
        <header>
            <?php // echo $resultado ?>
        </header>
    </body> -->
    <body>
        <!-- Corpo da página: imagem com o conteúdo sobreposto -->
        <div class="container">
            <!-- Imagem de fundo -->
            <img id="background" src="img/background.png">
            <img id="background" src="img/background.png">
            <img id="background" src="img/background.png">
            <img id="background" src="img/background.png">
            <!-- Conteúdo sobreposto -->
            <div class="conteudo">
                <!-- Título -->
                <fieldset class="topo">
                    <header>
                        <center>
                            <h1>O SEU RESULTADO FOI:<?php echo $resultado ?></h1>
                        </center>
                    </header>
                </fieldset>
                <br>
                <!-- Informações -->
                <main>
                    <!-- Descrição -->
                    <fieldset>
                        <?php echo $desc ?>
                    </fieldset>
                    <br><br>
                    <!-- Pessoas Relacionadas -->
                    <fieldset>
                        <center>
                            <h1>ALGUMAS FIGURAS FAMOSAS COM O MESMO ESPECTRO QUE VOCÊ:</h1>
                        </center>
                    </fieldset>
                    <br>
                    <fieldset>
                        <table class="relacionadas">
                            <!-- Coluna 1 -->
                            <tr> <!-- Imagens -->
                                <td><center><img src="img/img_teste.png" width="70%"></center></td>
                                <td><center><img src="img/img_teste.png" width="70%"></center></td>
                            </tr>
                            <tr> <!-- Margem -->
                                <td><div class="margem-baixo"></div></td>
                                <td><div class="margem-baixo"></div></td>
                            </tr>
                             <tr> <!-- Nome -->
                                <td id="nomes">Nome da Pessoa</td>
                                <td id="nomes">Nome da Pessoa</td>
                            </tr>
                            <!-- Margem -->
                            <tr>
                                <td><div class="margem-baixo2"></div></td>
                                <td><div class="margem-baixo2"></div></td>
                            </tr>
                            <!-- Coluna 2 -->
                            <tr> <!-- Imagens -->
                                <td><center><img src="img/img_teste.png" width="70%"></center></td>
                                <td><center><img src="img/img_teste.png" width="70%"></center></td>
                            </tr>
                            <tr> <!-- Margem -->
                                <td><div class="margem-baixo"></div></td>
                                <td><div class="margem-baixo"></div></td>
                            </tr>
                             <tr> <!-- Nome -->
                                <td id="nomes">Nome da Pessoa</td>
                                <td id="nomes">Nome da Pessoa</td>
                            </tr>
                        </table>
                        <?php // echo $rel ?>
                    </fieldset>
                    <br>
                </main>
            </div>
            <footer>
                
            </footer>
        </div>
</html>