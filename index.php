<?php
$title = 'Hello World';
$titleLen = strlen($title);
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

        <form action="" method="GET">

            <input type="text" name="student" placeholder="Inserisci il nome di uno studente...">
            <button>
                Cerca
            </button>

        </form>

    </body>
</html>