<?php
$note = 10;

switch ($note)
{
    case 5:
        echo "Bof";
    break;

    case 10:
        echo "sa commence a être bien";
    break;

    case 15:
        echo "de mieux en mieux";
    break;

    case 20:
        echo "Parfait";
    break;

    default:
        echo "J'ai n'ai pas d'info";
}

$calcul = 1005;

$somme = ($calcul - 250) * $calcul;
{
    echo "$somme";
}
?>

<?php

$boucle = 3;

while ($boucle <= 5)
{
    echo 'say hello </br>';
    $boucle++;
}

?>

<?php


for ($bouclefor = 1; $bouclefor <= 5; $bouclefor++)
{
    echo 'bonsoir je copie'. $bouclefor .'</br>';
}

echo $bouclefor .'</br>';

echo $bouclefor - 150 * 2;
?>
</br>
<?php

$prenom[0] = 'Francois';
$prenom[1] = 'Alain';
$prenom[2] = 'Gilbert';
$prenom[3] = 'Lezardo';
{
    echo $prenom[3] , $prenom[1] , $prenom[2];
}

?>

<?php

$coordonnees = array (
    'prenom' => 'Francois',
    'nom' => 'Dupont',
    'adresse' => '3 rue du paradis',
    'ville' => 'Marsaille');
{
    echo $coordonnees['adresse'];
}

?>