<?php


/**Funktion zur Generierung von Ergebnissen über die PageSpeed
Insights API anhand der eingegebenen URL*/
function getGoogleJson()
{
    $googlejson = file_get_contents("https://www.googleapis.com/drive/v2/files&key=902463734511-kpi9591hj1q58q36hkvr2nv1msedir8b.apps.googleusercontent.com");
    /**Dekodiert eine JSON-Zeichenkette*/
    return json_decode($googlejson);
}


var_dump(getGoogleJson());
