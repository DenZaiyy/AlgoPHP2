<html>

<head>
    <style type="text/css">
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        #pays {
            text-transform: uppercase;
        }
    </style>
</head>

</html>

<?php
// Soit le tableau suivant :
// $capitales = array
// ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
// Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
// s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
// une fonction personnalisée.
// Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);

function afficherTableHTML($capitales)
{
    ksort($capitales); //trie le tableau par ordre alphabétique

    echo '<table><thead><tr><th>Pays</th><th>Capitale</th></tr></thead><tbody>';
    foreach ($capitales as $pays => $capitale) {
        echo '<tr>';
        echo '<td id="pays">' . $pays . "</td>";
        echo '<td id="capitale">' . $capitale . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

afficherTableHTML($capitales);
