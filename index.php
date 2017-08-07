<!DOCTYPE html>

<?php include("PHPClass.php"); ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiago's Exercise</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script src="valida.js"></script>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container text-center">
                <h1>Galoá Wordwrap</h1>                      
            </div>
        </div>

        <div class="container-fluid bg-3 text-center">           
            <form action ="index.php" method="POST">

                Entre com número de caractéres desejados por linha:<br>
                <input type="text" name = "length" id = "length" onkeypress="return onlyNumber(event)" required>
                <br>
                <br>                
                Entre com o texto a ser dividido:<br>
                <textarea rows="5" cols="100" name = "text" id = "text" required></textarea>
                <br>
                <br>
                <input type="submit" value="GO"><br>
            </form>

            <?php
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
            }

            if (isset($_POST['length'])) {
                $length = $_POST['length'];
            }

            if (isset($text) && ($length)) {

                echo "<br>";
                echo "<h2>Resultado</h2>";

                Text::textWrap($text, $length);

                echo "<br>";
                echo "<br>";
            }
            ?>  

        </div>

    </body>
</html>





