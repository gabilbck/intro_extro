<?php
    include "include/MySql.php";
    include "include/functions.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Título da página</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <h1>Questionário - Intro ou Extro?</h1>
        </header>
        <main>
            <form action="resultado.php" method="post">
                <label name="1">Pergunta 1</label>
                <input type="radio" name="p1" value="e"><br>
                <input type="radio" name="p1" value="i"><br>
                <input type="radio" name="p1" value="i"><br>
                <input type="radio" name="p1" value="e"><br>

                <label>Pergunta 2</label>
                <input type="radio" name="p2" value="i"><br>
                <input type="radio" name="p2" value="i"><br>
                <input type="radio" name="p2" value="e"><br>
                <input type="radio" name="p2" value="e"><br>

                <label>Pergunta 3</label>
                <input type="radio" name="p3" value="e"><br>
                <input type="radio" name="p3" value="i"><br>
                <input type="radio" name="p3" value="e"><br>
                <input type="radio" name="p3" value="i"><br>

                <input type="submit" name="<?php echo $total ?>">
            </form>
        </main>
        <footer>

        </footer>
    </body>
</html>