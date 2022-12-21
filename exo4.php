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
// A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
// le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
// nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
// On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
// https://fr.wikipedia.org/wiki/
// Le tableau passé en argument sera le suivant :
// $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
// "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");


$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);


function afficherTableHTML($capitales)
{
    asort($capitales);

    echo '<table><thead><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr></thead><tbody>';
    foreach ($capitales as $pays => $capitale) {
        echo '<tr>';
        echo '<td id="pays">' . $pays . "</td>";
        echo '<td id="capitale">' . $capitale . '</td>';
        echo '<td id="wikiLink"><a href="https://fr.wikipedia.org/wiki/' . $capitale .  '" target="_blank">Lien</a></td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

afficherTableHTML($capitales);
