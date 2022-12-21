<?php
// Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
// caractère passée en argument en majuscules et en rouge.
// Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;

function convertirMajRouge($texte)
{
    echo '<p style="color: red;">' . strtoupper($texte) . '</p>'; //strtoupper met en majuscule le texte saisie
}

convertirMajRouge("Mon texte en parametre");
