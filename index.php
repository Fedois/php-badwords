<?php
$title = 'ciao a tutti amici';
$titleLen = strlen($title);

$searchWord = $_GET['word'];
$wordInTitle = strpos($title, $searchWord);

$changeWord = str_replace($searchWord , '***' , $title);
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
        
        <h2> caratteri: <?php echo $titleLen ?> </h2>

        <form action="" method="GET">

            <input type="text" name="word" placeholder="Inserisci una parola">
            <button>
                Invia
            </button>

        </form>

        <h3>parola che hai scritto da censurare: <?php echo $_GET['word'] ?> </h3>

        <h1> <?php echo $changeWord ?> </h1>
        <h2>caratteri: <?php echo strlen($changeWord) ?> </h2> 

    </body>
</html>