<?php

// Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
// chaîne de caractère représentant une date.
// Exemple :
// formaterDateFr("2018-02-23");

function formaterDateFr($date)
{
    $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); //change le format de la date à afficher en français
    $time = strtotime($date); //change la valeur string en type time
    echo $dateFormat->format($time); //défini le format fr pour la date $time
}

formaterDateFr("2018-02-23");
