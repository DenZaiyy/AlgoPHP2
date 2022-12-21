<?php
// Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
// de valeurs.
// Exemple :
// $elements = array("Monsieur","Madame","Mademoiselle");
// alimenterListeDeroulante($elements);

$elements = array("Monsieur", "Madame", "Mademoiselle");

function alimenterListeDeroulante($elements)
{
    echo '<select name="civilite">';
    foreach ($elements as $element) {
        echo '<option value="' . $element . '">' . $element . '</option>';
    }
    echo '</select>';
}

alimenterListeDeroulante($elements);
