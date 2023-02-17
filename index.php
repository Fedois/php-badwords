<?php
$string = 'ciao a tutti amici';
$stringLen = strlen($string);

$searchWord = $_GET['word'];
$wordInTitle = strpos($string, $searchWord);

$changeWord = str_replace($searchWord , '***' , $string);
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
            <?php echo $string ?>
        </h1>
        
        <h2> caratteri: <?php echo $stringLen ?> </h2>

        <form action="" method="GET">

            <input type="text" name="word" placeholder="Inserisci una parola">
            <button type="submit">
                Invia
            </button>

        </form>

        <h3>parola che hai scritto da censurare: <?php echo $searchWord ?> </h3>

        <h1> <?php echo $changeWord ?> </h1>
        <h2>caratteri: <?php echo strlen($changeWord) ?> </h2> 

    </body>
</html>