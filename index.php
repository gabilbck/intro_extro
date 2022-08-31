<?php
    include "include/MySql.php";
    include "include/functions.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="css/style.css" rel="stylesheet">
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
    <body>
        <!-- Corpo da página: imagem com o conteúdo sobreposto -->
        <div class="container">
            <!-- Imagem de fundo -->
            <img id="background" src="img/background.png">
            <img id="background" src="img/background.png">
            <img id="background" src="img/background.png">
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
                            <label>Pergunta 1</label><br>
                            <input type="radio" name="p1" value="e"> Sim<br>
                            <input type="radio" name="p1" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>    
                            <label>Pergunta 2</label><br>
                            <input type="radio" name="p2" value="e"> Sim<br>
                            <input type="radio" name="p2" value="i"> Não<br>
                        </fieldset>
                        <br>   
                        <fieldset>
                            <label>Pergunta 3</label><br>
                            <input type="radio" name="p3" value="e"> Sim<br>
                            <input type="radio" name="p3" value="i"> Não<br> 
                        </fieldset>
                        <br>
                        <fieldset> 
                            <label>Pergunta 4</label><br>
                            <input type="radio" name="p4" value="e"> Sim<br>
                            <input type="radio" name="p4" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 5</label><br>
                            <input type="radio" name="p5" value="e"> Sim<br>
                            <input type="radio" name="p5" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 6</label><br>
                            <input type="radio" name="p6" value="e"> Sim<br>
                            <input type="radio" name="p6" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 7</label><br>
                            <input type="radio" name="p7" value="e"> Sim<br>
                            <input type="radio" name="p7" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 8</label><br>
                            <input type="radio" name="p8" value="e"> Sim<br>
                            <input type="radio" name="p8" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 9</label><br>
                            <input type="radio" name="p9" value="e"> Sim<br>
                            <input type="radio" name="p9" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 10</label><br>
                            <input type="radio" name="p10" value="e"> Sim<br>
                            <input type="radio" name="p10" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 11</label><br>
                            <input type="radio" name="p11" value="e"> Sim<br>
                            <input type="radio" name="p11" value="i"> Não<br>
                            </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 12</label><br>
                            <input type="radio" name="p12" value="e"> Sim<br>
                            <input type="radio" name="p12" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 13</label><br>
                            <input type="radio" name="p13" value="e"> Sim<br>
                            <input type="radio" name="p13" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 14</label><br>
                            <input type="radio" name="p14" value="e"> Sim<br>
                            <input type="radio" name="p14" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <label>Pergunta 15</label><br>
                            <input type="radio" name="p15" value="e"> Sim<br>
                            <input type="radio" name="p15" value="i"> Não<br>
                        </fieldset>
                        <br>
                        <fieldset>
                            <center>
                                <!-- Enviar Informações ao baanco de dados -->
                                <input id="enviar" type="submit"  name="<?php echo $total ?>">
                            </center>
                        </fieldset>
                        </form>
                    </main>
                </fieldset>
            </div>
        </div>
    </body>
</html>