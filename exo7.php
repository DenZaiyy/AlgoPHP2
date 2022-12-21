<html>

<head>
    <style>
        fieldset {
            width: 200px;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

</html>

<?php
// Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
// dans le tableau associatif si la case est cochée ou non.
// Exemple :
// genererCheckbox($elements);
// //où $elements est un tableau associatif clé => valeur avec 3 entrées.

$elements = array(
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false
);

function genererCheckbox($elements)
{
    echo '<fieldset>';
    echo '<legend>Tableau avec des checkbox:</legend>';
    foreach ($elements as $key => $value) {
        if ($value == true) {
            $value = "checked";
        } else {
            $value = "";
        }
        $checkBoxChecked = '<input type="checkbox" name="' . $key . '" ' . $value . '>';
        $checkBoxUnchecked = '<input type="checkbox" name="' . $key . '" ' . $value . '>';
        $labelForCheckbox = '<label for="' . $key . '">' . $key . '</label>';

        if ($value == true) {
            echo '<div>';
            echo $checkBoxChecked;
            echo $labelForCheckbox;
            echo '</div>';
        } else {
            echo '<div>';
            echo $checkBoxUnchecked;
            echo $labelForCheckbox;
            echo '</div>';
        }
    }
    echo '</fieldset>';
}

genererCheckbox($elements);
