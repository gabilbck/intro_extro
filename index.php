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
    function validateForm() {
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
}
</script>

    <body>
        <header>
            <h1>Questionário - Intro ou Extro?</h1>
        </header>
        <main>
            <form name="myForm" action="resultado.php" method="post" onsubmit="return validateForm()">
                <label>Pergunta 1</label>
                <span value="<?php echo $p1Err?>">
                <input type="radio" name="p1" value="e">e<br>
                <input type="radio" name="p1" value="i">i<br>
                <input type="radio" name="p1" value="i">i<br>
                <input type="radio" name="p1" value="e">e<br>

                <label>Pergunta 2</label>
                <input type="radio" name="p2" value="i">i<br>
                <input type="radio" name="p2" value="i">i<br>
                <input type="radio" name="p2" value="e">e<br>
                <input type="radio" name="p2" value="e">e<br>

                <label>Pergunta 3</label>
                <input type="radio" name="p3" value="e">e<br>
                <input type="radio" name="p3" value="i">i<br>
                <input type="radio" name="p3" value="e">e<br>
                <input type="radio" name="p3" value="i">i<br>

                <input type="submit"  name="<?php echo $total ?>">
            </form>
        </main>
        <footer>

        </footer>
    </body>
</html>