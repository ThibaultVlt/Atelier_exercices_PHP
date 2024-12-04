<?php
    //Avoir un maximum de code PHP, j'ai opter de tout insérer dans une balise PHP
    //Mise en place du head
    $html = "<!DOCTYPE html>";
    $html = $html . "<html>";
    $html = $html . "<head>";
    $html = $html . "<title>Table de Multiplication</title>";
    $html = $html . "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";
    $html = $html . '<link rel="stylesheet" href="./style.css">';
    $html = $html . "</head>";
    //Insertion du body
    $html = $html . "<body>";
    $html = $html . '<h2>Une table de multiplication</h2>';
    $html = $html . "<table>";
    //Mise en place d'une boucle afin de créer le tableau de 10*10
    //Servant aussi de base pour les calculs
    for ($i=1; $i<=10; $i++) {
        if ($i==1) {
	$html = $html . '<tr class="bck-gray">';
        }
    for($j=1; $j<=10; $j++) {
        $html = $html . "<td ";
            if ($j==1) {
                $html = $html . 'class="bck-gray"';
            }
        $html = $html . ">";
        $html = $html . $i*$j;
        $html = $html . "</td>";
    }
        $html = $html . "</tr>";
    }
    $html = $html . "</table>";
    $html = $html . "</body>";
    $html = $html . "</html>";

    //Affichage de la page
    print $html;
