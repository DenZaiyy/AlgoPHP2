<html>

<head>
    <style>
        .form-contain {
            width: 150px;
            height: auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

</html>

<?php
// Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
// précisant le nom des champs associés.
// Exemple :
// $nomsInput = array("Nom","Prénom","Ville");
// afficherInput($nomsInput);

$nomsInput = array("Nom", "Prénom", "Ville");

function cleanString($text)
{
    $utf8 = array(
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E'
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text); //remplace le caractère spéciaux en caractere normaux (ex: é -> e)
}

function afficherInput($nomsInput)
{
    echo '<div class="form-contain"><form method="POST">';
    foreach ($nomsInput as $input) {
        echo '<label for="' . cleanString($input) . '">' . $input . '</label>';
        echo '<input type="text" name="' . cleanString($input) . '"' . 'id="' . cleanString($input) . '">';
    }
    echo '</form></div>';
}

afficherInput($nomsInput);
