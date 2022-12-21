<html>

<head>
    <style>
        *,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contain {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        figure img {
            width: 150px;
            height: auto;
        }
    </style>
</head>

</html>
<?php
// Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
// Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
// Exemple :
// repeterImage($url,4);

function repeterImage($url, $intValue)
{
    echo '<div class="contain">';
    for ($i = 0; $i < $intValue; $i++) {
        echo '<figure>';
        echo '<a href="' . $url . '" target="_blank"><img src="' . $url . '"></a>';
        echo '</figure>';
    }
    echo '</div>';
}

$url = "http://my.mobirise.com/data/userpic/764.jpg";

repeterImage($url, 4);
