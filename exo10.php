<html>

<head>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 250px;
            height: auto;
            border: 1px solid black;
        }

        .infos__section div {
            padding: 5px;
        }

        .infos__section div input[type="text"] {
            width: 100%;
        }

        input[type="email"] {
            margin-top: 5px;
            width: 100%;
        }

        .sexe__section {
            margin: 10px 0;
            text-align: center;
        }

        .formation__section {
            margin: 5px;
            text-align: center;
        }

        .formation__section select {
            text-align: center;
            width: 100%;
        }

        input[type="submit"] {
            margin: 5px;
            padding: 5px;
            transition: all .2s ease-in-out;
        }

        input[type="submit"]:hover {
            transition: all .2s ease-in-out;
            background-color: #B6B6B6;
            color: #fff;
        }
    </style>
</head>

</html>

<?php
// En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
// complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
// « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
// Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
// de validation (submit).

function userInfos($array)
{
    echo '<div class="infos__section">';
    foreach ($array as $key => $value) {
        echo '<div>';
        echo '<label for="' . $key . '">' . $value . ' :</label>';
        echo '<input type="text" id="' . $key . '" name="' . $key . '">';
        echo '</div>';
    }
}

function userEmail($array)
{
    echo '<div>';
    foreach ($array as $key => $value) {
        echo '<label for="' . $key . '">' . $key . ' :</label>';
        echo '<input type="email" id="' . $key . '" placeholder="' . $value . '">';
    }
    echo '</div>';
    echo '</div>';
}

function radioButtonSexe($array)
{
    echo '<div class="sexe__section">';
    echo '<label name="sexe">Sexe :</label>';
    echo '<div>';
    foreach ($array as $key => $value) {
        if ($value == true) {
            $value = 'checked';
        } else {
            $value = '';
        }
        echo '<input type="radio" value="' . $key . '"' . $value . '>';
        echo '<label for="' . $key . '">' . $key . '</label>';
    }
    echo '</div>';
    echo '</div>';
}

function listOfFormation($array)
{
    echo '<div class="formation__section">';
    echo '<label for ="formation">Formation :</label>';
    echo '<select name="formation">';
    foreach ($array as $value) {
        echo '<option value="' . $value . '">' . $value . '</option>';
    }
    echo '</select>';
    echo '</div>';
}

$arraySexe = [
    "Homme" => true,
    "Femme" => false
];

$arrayFormation = [
    'Développeur Logiciel',
    'Designer web',
    'Intégrateur',
    'Chef de projet'
];

$arrayForInfos = [
    'Nom' => 'Nom',
    'Prenom' => 'Prénom',
    'Ville' => 'Ville'
];

$arrayForMail = [
    'Email' => 'example@example.com'
];

echo '<form method="POST">';
userInfos($arrayForInfos);
userEmail($arrayForMail);
radioButtonSexe($arraySexe);
listOfFormation($arrayFormation);
echo '<input type="submit" value="Envoyer le formulaire">';
echo '</form>';
