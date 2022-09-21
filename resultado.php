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
    $img1 = $img2 = $img3 = $img4 = "";
    $nome1 = $nome2 = $nome3 = $nome4 = "";
    // echo 'total extrovertido'.$total['total_e'].'<br>';
    // echo 'total introvertido'.$total['total_i'].'<br>';
    if($total['total_e'] > $total['total_i']){
        $resultado = '<h1 id="extro">EXTROVERTIDO</h1>';
        $desc = '<p>Pessoas extrovertidas, em resumo, tendem a ter uma maior facilidade e energia para interagirem com outras pessoas, se sentido mais energéticos e animados enquanto fazem isso.</p>';
        $img1 = '<img width="300" src="img/extro/adele.jpg" alt="Adele">';
        $img2 = '<img width="300" src="img/extro/steve.jpg" alt="Steve Jobs">';
        $img3 = '<img width="300" src="img/extro/downey.jpg" alt="Robert Downey Jr.">';
        $img4 = '<img width="300" src="img/extro/madonna.jpg" alt="Madonna">';
        $nome1 = '<a>Adele</a>';
        $nome2 = '<a>Steve Jobs</a>';
        $nome3 = '<a>Robert Downey Jr.</a>';
        $nome4 = '<a>Madonna</a>';
        $sql = $pdo->prepare("INSERT INTO resultado (resultado) VALUES (?)");
            if ($sql->execute(array(1))){
                $msgErr = "Dados cadastrados com sucesso!";
            } else {
                $msgErr = "Dados não cadastrados!";
            }
    }else{
        $resultado = '<h1 id="intro">INTROVERTIDO</h1>';
        $desc = '<p>Pessoas introvertidas, em resumo, tendem a concentrar sua energia, majoritariamente, neles mesmos; portanto, tendem a preferir ter mais tempo à sós do que interagir com outras pessoas (mas não que isso seja um problema, é apenas uma <b>escolha</b> do introvertido).</p>';
        $img1 = '<img width="300" src="img/intro/albert.jpg" alt="Albert Einsten">';
        $img2 = '<img width="300" src="img/intro/hermione.jpg" alt="Hermione">';
        $img3 = '<img width="300" src="img/intro/pocahontas.jpg" alt="Pocahontas">';
        $img4 = '<img width="300" src="img/intro/christina.jpg" alt="Christina Aguilera">';
        $nome1 = '<a>Albert Einsten</a>';
        $nome2 = '<a>Hermione Granger</a>';
        $nome3 = '<a>Pocahontas</a>';
        $nome4 = '<a>Christina Aguilera</a>';
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
    <body bgcolor="#CB1D98">
        <!-- Corpo da página: imagem com o conteúdo sobreposto -->
        <div class="container">
            <!-- Imagem de fundo -->
            <img id="background" src="img/background2.png">
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
                        <?php echo $desc ?><br>
                        <a><b>ATENÇÃO!</b><br>
                        <div class="margem-baixo"></div>
                        Esse questionário NÃO tem a intenção de rotular e nem diagnosticar a partir desse resultado.
                        Apesar de ser baseado em pesquisas científicas, muitos fatores podem interferir em seu resultado, tais como:
                        <b>idade, experiências, tímidez, traumas</b> e etc.
                        </a>
                    </fieldset>
                    <br><br>
                    <!-- Pessoas Relacionadas -->
                    <fieldset>
                        <center>
                            <h1>ALGUMAS FIGURAS FAMOSAS COM O MESMO ESPECTRO QUE VOCÊ:</h1>
                        </center>
                    </fieldset>
                    <br>
                    <center>
                    <fieldset>
                        <table class="relacionadas">
                            <!-- Linha 1 -->
                            <tr> <!-- Imagens -->
                                <td class="esq"><center><?php echo $img1; ?></center></td>
                                <td class="dir"><center><?php echo $img2; ?></center></td>
                            </tr>
                            <tr> <!-- Margem -->
                                <td><div class="margem-baixo"></div></td>
                                <td><div class="margem-baixo"></div></td>
                            </tr>
                             <tr> <!-- Nome -->
                                <td class="esq" id="nomes"><center><?php echo $nome1; ?></center></td>
                                <td class="dir" id="nomes"><center><?php echo $nome2; ?></center></td>
                            </tr>
                            
                            <!-- Margem -->
                            <tr>
                                <td><br></td>
                                <td><br></td>
                            </tr>
                            <!-- Linha 2 -->
                            <tr> <!-- Imagens -->
                                <td class="esq"><center><?php echo $img3; ?></center></td>
                                <td class="dir"><center><?php echo $img4; ?></center></td>
                            </tr>
                            <tr> <!-- Margem -->
                                <td><div class="margem-baixo"></div></td>
                                <td><div class="margem-baixo"></div></td>
                            </tr>
                             <tr> <!-- Nome -->
                                <td class="esq" id="nomes"><center><?php echo $nome3; ?></center></td>
                                <td class="dir" id="nomes"><center><?php echo $nome4; ?></center></td>
                            </tr>
                        </table>
                    </fieldset>
                    <br><br><br><br><br>
                    <button id="voltar"><a href="index.php">Voltar ao Questionário</a></button>
                    </center>
                    <br>
                </main>
            </div>
            <footer>
                
            </footer>
        </div>
    </body>
</html>