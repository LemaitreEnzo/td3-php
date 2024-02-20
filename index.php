<?php
// ex1
$string = 'Bonjour, je m\'appelle françois dupont, j\'ai 35 ans et j\'habite Paris.';

// ex2
$newString = "Je suis une \"chaîne de caractères\".";

// ex3
$quotation = <<<IDENTIFIER
    Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre. 
    Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer 
    que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais 
    dans un extrême embarras. Voir, si touchés que je fusse un grand misérable! 
    Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et 
    inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en 
    allait.
IDENTIFIER;

// ex4
$firstName = 'François';
$lastName = 'Dupont';
$city = 'paris';
$age = '35';
$sentence = 'Bonjour, je m\'appelle '.$firstName.' '.$lastName.', j\'ai '.$age.' ans et j\'habite '.$city.'.';

// ex5
$myFirstName = ucwords($firstName);
$myLastName = strtoupper($lastName);
$myCity = ucwords($city);
$str = 'Bonjour, je m\'appelle '.$myFirstName.' '.$myLastName.', j\'ai '.$age.' ans et j\'habite '.$myCity.'.';

// ex6
$lengthName = strlen($firstName);

// ex7
$firstUpperCar = ucwords($string);

// ex8
$notes = [15, 13, 8, 10, 17];

// ex9
$matieres = array('html/css', 'algorithmique', 'anglais', 'marketing', 'ui/ux');

// ex11
$fusion = array_combine($matieres,$notes);

// ex12
$newFusion = array_combine($matieres,$notes);
$temp = $newFusion['algorithmique'];
$newFusion['algorithmique'] = $fusion['marketing'];
$newFusion['marketing'] = $temp;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $string ?></p>
    <p><?= $newString ?></p>
    <p><?= $quotation ?></p>
    <p><?= $sentence ?></p>
    <p><?= $str ?></p>
    <p><?= $firstUpperCar ?></p>
    <p><?= end($matieres).' : '.end($notes) ?></p>
    <p><?php print_r($fusion) ?></p>
    <p><?php print_r($newFusion) ?></p>
</body>

</html>