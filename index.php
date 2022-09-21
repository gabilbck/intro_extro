<?php
    include "include/MySql.php";
    include "include/functions.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="css/estilo.css" rel="stylesheet">
        <title>INTROVERTIDO OU EXTROVERTIDO? | QUESTIONÁRIO - PERGUNTAS</title>
        <meta charset="utf-8">
    </head>
    <script>
        //Validar se todas as perguntas foram respondidas
        function validateForm(){
            let p1 = document.forms["myForm"]["p1"].value;
            if (p1 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p2 = document.forms["myForm"]["p2"].value;
            if (p2 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p3 = document.forms["myForm"]["p3"].value;
            if (p3 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p4 = document.forms["myForm"]["p4"].value;
            if (p4 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p5 = document.forms["myForm"]["p5"].value;
            if (p5 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p6 = document.forms["myForm"]["p6"].value;
            if (p6 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p7 = document.forms["myForm"]["p7"].value;
            if (p7 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p8 = document.forms["myForm"]["p8"].value;
            if (p8 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p9 = document.forms["myForm"]["p9"].value;
            if (p9 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p10 = document.forms["myForm"]["p10"].value;
            if (p10 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p11 = document.forms["myForm"]["p11"].value;
            if (p11 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p12 = document.forms["myForm"]["p12"].value;
            if (p12 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p13 = document.forms["myForm"]["p13"].value;
            if (p13 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p14 = document.forms["myForm"]["p14"].value;
            if (p14 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
            let p15 = document.forms["myForm"]["p15"].value;
            if (p15 == "") {
            alert("Responda todas a todas as perguntas!");
            return false;
            }
        }
    </script>
    <body bgcolor="#CB1D98">
        <!-- Corpo da página: imagem com o conteúdo sobreposto -->
        <div class="container">
            <!-- Imagem de fundo -->
            <img id="background" src="img/background3.png">
            <!-- Conteúdo sobreposto -->
            <div class="conteudo">
                <!-- Título -->
                <fieldset class="topo">
                    <header>
                        <h1>
                            DESCUBRA SE VOCÊ É <br>
                            <a id="extro">EXTROVERTIDO</a> OU <a id="intro">INTROVERTIDO</a>!
                        </h1>
                    </header>
                </fieldset>
                <br><br>
                <!-- Questionário -->
                    <main>
                        <form name="myForm" action="resultado.php" method="post" onsubmit="return validateForm()">
                        <fieldset>    
                            <label>Você tende a ter um círculo social menor, porém estável, sólido e íntimo?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p1" value="i"> Sim<br>
                            <input type="radio" name="p1" value="e"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>    
                            <label>Você prefere se relacionar com pessoas das quais já é acostumado e tende a demorar mais para ter novas amizades (não por ser reservado, mas sim, por demorar a ter confiança e se sentir confortável para mostrar a sua personalidade)?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p2" value="i"> Sim<br>
                            <input type="radio" name="p2" value="e"> Não<br>
                        </fieldset>
                        <br>   
                        <fieldset>
                            <label>Você possui um círculo social mais amplo, não se importa tanto de ter o conforto da estabilidade de ter um relacionamento com as mesmas pessoas de quem está acostumado, ou seja, está tudo bem as pessoas entrarem e saírem de sua vida?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p3" value="e"> Sim<br>
                            <input type="radio" name="p3" value="i"> Não<br> 
                        </fieldset>
                        <br>
                        <fieldset> 
                            <label>Fica nervoso por te tirarem da sua zona de conforto, mas depois de um período de tempo, você “pega o jeito”? </label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p4" value="i"> Sim<br>
                            <input type="radio" name="p4" value="e"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Quando lhe tiram da sua zona de conforto, você se adequa rapidamente e não tem problemas no processo?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p5" value="e"> Sim<br>
                            <input type="radio" name="p5" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você se sente cansado após ter muitas interações sociais no mesmo dia?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p6" value="i"> Sim<br>
                            <input type="radio" name="p6" value="e"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Depois de ter um dia cheio e ter várias interações sociais, você quer espairecer e deseja sair para “recarregar” suas energias através do contato social?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p7" value="e"> Sim<br>
                            <input type="radio" name="p7" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você se sente energizado em lugares com muitas pessoas, mesmo que seja um ambiente com muito barulho?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p8" value="e"> Sim<br>
                            <input type="radio" name="p8" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você prefere lugares tranquilos, não muito cheios ou até mesmo vazios em que você possa ficar sozinho?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p9" value="i"> Sim<br>
                            <input type="radio" name="p9" value="e"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você sente a necessidade de falar com alguém, sem necessariamente existir algum problema, apenas para conversar? </label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p10" value="e"> Sim<br>
                            <input type="radio" name="p10" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você não vê problema em não falar com ninguém e, quando lhe perguntam algo, você não tem dificuldade em responder?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p11" value="i"> Sim<br>
                            <input type="radio" name="p11" value="e"> Não<br>
                            </fieldset>
                        <br>
                        <fieldset>
                            <label>Você gosta e se sente empolgado de conversar com várias pessoas com interesses e gostos diferentes entre si?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p12" value="e"> Sim<br>
                            <input type="radio" name="p12" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você tende a conversar menos com as pessoas a sua volta, entretanto, quando é sobre algum assunto de seu interesse você se “solta” mais?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p13" value="i"> Sim<br>
                            <input type="radio" name="p13" value="e"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Você gosta de ir à festas?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p14" value="e"> Sim<br>
                            <input type="radio" name="p14" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Quando te chamam para uma festa você primeiro se preocupa se vai ter muitas pessoas e/ou sobre o que é antes de aceitar?</label><br>
                            <div class="margem-baixo"></div>
                            <input type="radio" name="p15" value="i"> Sim<br>
                            <input type="radio" name="p15" value="e"> Não<br>
                        </fieldset>
                        <br><br>
                        <center>
                            <!-- Enviar Informações ao baanco de dados -->
                            <input id="enviar" type="submit" name="<?php echo $total ?>">
                            <br><br><br><br><br><br><br>
                            <input id="limpar" type="reset" value="Refazer Questionário">
                        </center>
                        </form>
                    </main>
                </fieldset>
            </div>
        </div>
    </body>
</html>