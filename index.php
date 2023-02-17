<?php
$title = 'ciao a tutti amici';
$titleLen = strlen($title);
$censored = '***';
$_GET['word'] = $censored;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World! in PHP</title>
    </head>
    <body>
        
        <h1>
            <?php echo $title ?>
        </h1>
        <h2> <?php echo strlen($title) ?> </h2>
        <h3>parola che hai scritto: <?php echo $_GET['word']; ?> </h3>

        <form action="" method="GET">

            <input type="text" name="word" placeholder="Inserisci una parola">
            <button>
                Cerca
            </button>

        </form>

    </body>
</html>