<?php
// 1- Trouvez un moyen d'échanger les valeurs de deux variables $a et $b en une seule instruction, 

    // $a = 8;
    // $b = "b";
    // $saut = "<br />";
    // echo 'On démarre avec les 2 variables suivantes :' . $saut;
    // echo '$a = ' . $a . $saut;
    // echo '$b = ' . $b . $saut;
    
    // list($a, $b) = array($a, $b);

    // print $saut . 'On échange les 2 variables, grâce à l\'élément list() et on obtient :' . $saut;
    // print '$a = ' . $b . $saut;
    // print '$b = ' . $a;


//2- Déclarez un tableau $pays indexé par des entiers contenant les noms de trois pays.

    // $pays = array('France','Norvège', 'Géorgie');

//3- Affichez ce tableau à l'aide de l'instruction var_dump.
    // var_dump($pays);

// 4- Parcourez le tableau à l'aide d'une boucle for, vous pourrez utiliser la fonction count ().
    // echo "Boucle for : <br/>";
    // for ($i=0; $i < count($pays); $i++) {
    //     print_r($pays[$i] . " ");
    // }

// 5- Parcourez de nouveau le tableau à l'aide d'une boucle foreach.
    // echo "Boucle foreach : <br/>";
    // foreach ($pays as $value){
    //     print $value . "<br />";
    // }

// 6- Pour quelle raison n'est-il pas approprié d'utiliser une boucle do ... while.
    //La boucle do-while garantit que la ou les instructions sont exécutées au moins une fois avant d'évaluer la condition.
    // Si le tableau est vide la boucle sera effectuée au moins une fois aussi

//  7- Ajoutez des index sous forme de chaînes de caractères pour associer les capitales aux pays du tableau $pays.

    $pays = array(
        "France" => "Paris",
        "Norvège" => "Oslo",
        "Géorgie" => "Tbilissi",
    );

//8- Combien vaut l'expression count($pays) ?
    // echo 'count($pays) = '.count($pays).'<br>';

    // print_r($pays);

//9- Comment parcourir ce tableau pour afficher chaque pays et sa capitale ?
    // echo 'En utilisant une boucle foreach, on obtient : <br/>';
    
    // foreach($pays as $item => $valeur){
	//     echo $item. " => ".$valeur."<br>";
    // }

//10- Ajouter au script en cours une fonction enumerer($t) qui prend le tableau comme paramètre et qui affiche la valeur de chaque index alphanumérique.

    // function enumerer($t){
    //     foreach ($t as $item => $valeur){
    //         echo $valeur.'=>'.$item.'<br>';
    //     }
    // return;
    // }

    // echo 'La fonction enumerer() retourne : <br />';
    // enumerer($pays);

//11- Insérez une valeur $t[« capitale »] = « pays » en créant une fonction ajouter($t) puis afficher les nouvelles valeurs du tableau résultant.
function ajouter ($t, $key, $value)	{
    $t[$key] = $value;
    return $t;
    }

    ajouter($pays, "Italie", "Rome");

    foreach ($pays as $item => $value){
		echo $value.' => '.$item.'<br>';
	}

    echo '<br/>';

//12- Affichez par var_dump le tableau après l'exécution de la fonction. Qu'en concluez-vous ?
    echo 'Voici le résultat du var_dump() : <br/>';
    var_dump($pays);
    echo '<br/> Cela renvoi le tableau initialement défini en 7 -.';