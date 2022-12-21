<?php
// En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
// adresse e-mail a le bon format.


$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";

function checkFormatEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //vérifie le format de l'adresse email
        echo "L'adresse $email est une adresse e-mail valide.<br>";
    } else {
        echo "L'adresse $email est une adresse e-mail invalide<br>";
    }
}

echo checkFormatEmail($email1);
echo checkFormatEmail($email2);
