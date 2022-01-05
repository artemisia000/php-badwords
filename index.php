<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

#Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.



$paragraph = "Aspettati veleno dall'acqua stagnante.";

echo $paragraph;
echo "Lunghezza:" .strlen ($paragrph);


$badword = $_GET['badword'];
echo 'BADWORD:' .$badword;

$newParagraph = str_replace($badword, '***', $paragraph);

echo $newParagraph;
echo "<br>";
echo 'Lunghezza:' .strlen($newParagraph);


?>

</body>
</html>