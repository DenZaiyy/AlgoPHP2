<?php
// Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
// valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
// Exemple :
// afficherRadio($nomsRadio);

function afficherRadio($array)
{
    echo '<fieldset>';
    echo '<div>';
    foreach ($array as $item) {
        echo '<input type="radio" name ="test" value="' . $item . '">';
        echo '<label for="' . $item . '">' . $item . '</label>';
    }
    echo '</div>';
    echo '</fieldset>';
}

$nomsRadio = [
    "Masculin",
    "Féminin",
    "Autre"
];

afficherRadio($nomsRadio);
