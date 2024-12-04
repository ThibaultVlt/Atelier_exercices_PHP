<?php
/* CONSIGNE
Créez un tableau contenant une liste d'adresses e-mail.
Extrayez le nom de serveur de ces données, puis réalisez des statistiques sur
les occurrences de chaque fournisseur d'accès.
 */

//Tableau d'e-mails où il faut extraire le nom des serveurs.
    $tab=array("php7@free.fr","sacha8@gmail.com","ariel3@wanadoo.fr",
    "webmestre@wanadoo.fr","marcelduchamp9@gmail.com","picasso69@gmail.com",
    "vangogh6@gmail.com","matis63@free.fr","degas45@wanadoo.fr");

//Utilisation de explode() pour couper les adresse mail et garder les nom de domaines

    foreach ($tab as $cle => $valeur){
        $coupe=explode("@",$valeur);
        $domaine[]=$coupe[1];
    }

//Utilisation de array_count_values pour compte les apparitions de chaque valeur distincte dans un tableau

    $comptage= array_count_values($domaine); //Attention cela retourne un tableau
    //Affichage de tableau qui contient les noms de domaine avec le nombre présent pour chaque.
    print_r($comptage);

    print "<br/>";
    print "<br/>";
    //Il nous reste plus qu'à calculé le pourcentage pour chaque nom de domaine
    //pour cela il nous faut le nombre total d'élément dans le tableau initial $tab
    $total = count($tab);

    //Ensuite pour chaque fournisseur du tableau $comptage on peut calculer le pourcentage (total = )
    print "Statistique pour chaque fournisseur : <br/>";
    foreach ($comptage as $fournisseur => $nombre ){
        $pourcentage[$fournisseur]=($nombre*100)/$total;
        //utilisation du var_dump pour voir les résultats
        // var_dump($pourcentage[$fournisseur]);
        //L'élément round() permet d'arrondir les résultats à 2 chiffres après la virgule comme demandé.
        echo "Fournisseur d'accès : $fournisseur = " .round($pourcentage[$fournisseur],2)." % <br>";
    }