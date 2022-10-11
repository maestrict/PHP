<?php

include ('../../fonctions/fonctions.php'); 


$tableau1 = ["pomme", "poire","Banane"];
$tableau2 = ["abricot", "framboise","cerise"];

$tableau3 = ["nom"=>"Verheyen",
             "prenom"=>"Raphael",
             "age"=>31,
             "etat_civil"=>"Celibataire",
             "metier"=>"Prof"];



$tableau6 = ["nom"=>"Jocé",
             "prenom"=>"Po",
             "age"=>8];

$tableau7 = ["nom"=>"Elèou",
            "prenom"=>"Jeanne",
            "age"=>18];

/*
1 - Créer une fonction qui permet d'ajouter un element à un tableau.
    Return le tableau complété.
  (2 arg : le tableau / l'élement à ajouter) [$tableau1]
*/


function ajouteAuTableau($tab,$valeur){
    array_push($tab,$valeur);
    return $tab;

}
echo "EX1 : ";
echo "<pre>";
$tableau1 = ajouteAuTableau($tableau1,"cerise");
var_dump($tableau1);
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

/*
2 - Créer une fonction qui retourne le nombre d'elements dans le tableau.
    le tableau doit être donné en paramètre.
    ( Ne pas utiliser les fonctions de PHP) [$tableau1]
*/

function nombreElementTableau($tab){
    $index = 0;
    foreach($tab as $element){
        $index++;
    }
    return $index;
}
echo "EX2 : ";
echo nombreElementTableau($tableau1);
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

/*
3 - Créer une fonction qui va merge 2 tableaux de 1 dimension.
    return du tableau merge.
    ( Ne pas utiliser array_merge) [$tableau1] & [$tableau2]
*/

function merge2Tab($tab1,$tab2){
    foreach($tab2 as $element){
        array_push($tab1,$element);
    }
    return $tab1;
}

echo "EX3 : ";
echo "<pre>";
var_dump(merge2Tab($tableau1,$tableau2));
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

/*
4 - Créer une fonction qui vérifie si un tableau à des éléments vides, si oui,
    Elle retournera le tableau des clés vides. [$tableau3]
    !!! pour tableau dynamique !!!
*/


function verifieSiTabVide($tab){
    $arrayNull = array();
    foreach ($tab as $key => $value) {
        if($value == null){
            array_push($arrayNull,$key);
        }
      }
    return (!empty($arrayNull)) ? $arrayNull : "Vide";
}
echo "EX4 : ";
echo "<pre>";
var_dump(verifieSiTabVide($tableau3));
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";


/*
5 - Création d'un tableau par rapport au fichier reçu(tableauAFaire). [$tableau4]
*/

$tableau4 =[
    "cours" => "5WID4",
    "local" => [
                "numero" => 106,
                "heure" => "18th",
                "nbPlace" => 25,
                "typeCours" =>"info" ,
                "etudiants" =>[
                                "etudiant1" => [
                                    "nom" => "Verheyen",
                                    "prenom" => "Raphael",
                                    "age" => 31
                                ],
                                "etudiant2" =>[
                                    "nom" => "Delbar",
                                    "prenom" => "Benjamin",
                                    "age" => 31
                                ],
                                "etudiant3" =>[
                                    "nom" => "Lacroix",
                                    "prenom" => "Alexandre",
                                    "age" => 31
                                ],
                                "etudiant4" =>[
                                    "nom" => "Coucou",
                                    "prenom" => "Hibou",
                                    "age" => 1337
                                ],
                                "etudiant5" =>[
                                    "nom" => "Maes",
                                    "prenom" => "Arnaud",
                                    "age" => 27,
                                ],
                            ]
            ]
];

echo "EX5 : ";
echo "faire le tableau 4";
echo'<pre>';
var_dump($tableau4);

echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";


/*
6 - Afficher le tableau(exos5) comme dans l'image(tablExos6) [$tableau4]
    (imaginer qu'il y à un grand nombre d'etudiants)
*/



echo "EX6  : ";
echo "<br>";

echo "Intilé du cours : ".$tableau4["cours"];
echo "<br>";
echo "Local : ".$tableau4["local"]["numero"];
echo "<br>";
echo "Nombre d'eleves : ".$tableau4["local"]["nbPlace"];
echo "<br>";
echo "<br>";
echo "<table style='border : 1px solid black;' >";
echo "<tr>";
foreach($tableau4["local"]["etudiants"]["etudiant5"] as $key => $value){
    echo "<th style='border : 1px solid black; padding:2vh'>$key</th>";
}
echo "</tr>";
foreach($tableau4["local"]["etudiants"] as $key => $value){
    echo "<tr>";
    foreach($value as $key2 => $value2){
        echo "<td style='border : 1px solid black; padding:2vh'>$value2</td>";
    }
    echo "</tr>";
}

echo "</table>";
    
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

///////////////////////////////////////////////////////////////////////
echo "EX6 bis : ";
echo "<br>";

foreach($tableau4 as $key => $value){
    if(!is_array($value)){
        echo $value;
    }
    echo "<br>";
    if( $key == "local"){
        foreach($value as $key2 => $value2){
            if(!is_array($value2)){
                echo "$value2";
            }
            echo "<br>";
            
            if( $key2 == "etudiants"){
                
                echo "<br>";
                foreach($value2 as $key3 => $value3){
                    if(!is_array($value3)){
                        echo $value3;
                    }
                  
                    if( $key3 == "etudiant1"){
                        echo $key3;
                        echo "<br>";
                        echo "------------";
                        echo "<br>";
                        foreach($value3 as $key4 => $value4){
                            echo $value4;
                          
                            echo "<br>";
                        }
                    }
                    if( $key3 == "etudiant2"){
                        echo $key3;
                        echo "<br>";
                        echo "------------";
                        echo "<br>";
                        foreach($value3 as $key4 => $value4){
                            echo $value4;
                          
                            echo "<br>";
                        }
                    }
                    if( $key3 == "etudiant3"){
                        echo $key3;
                        echo "<br>";
                        echo "------------";
                        echo "<br>";
                        foreach($value3 as $key4 => $value4){
                            echo $value4;
                          
                            echo "<br>";
                        }
                    }
                    if( $key3 == "etudiant4"){
                        echo $key3;
                        echo "<br>";
                        echo "------------";
                        echo "<br>";
                        foreach($value3 as $key4 => $value4){
                            echo $value4;
                           
                            echo "<br>";
                        }
                    }
                }
            }
        }
    }
   
   
}
    
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";



/*
(Exos défi!)
7 - Ajouter deux etudiants($tableau6 & $tableau7) au $tableau4
 !!!!!! Mettre a jour la clé 'etudiant....'!!!!!!!!!
*/

echo "EX7 : ";

array_push($tableau4["local"]["etudiants"],$tableau7,$tableau6);
$tableau4["local"]["etudiants"]["etudiant6"]=$tableau4["local"]["etudiants"][0] ;
unset($tableau4["local"]["etudiants"][0]);
$tableau4["local"]["etudiants"]["etudiant7"]=$tableau4["local"]["etudiants"][1] ;
unset($tableau4["local"]["etudiants"][1]);

echo'<pre>';
var_dump($tableau4);

echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

/*
8 - Créer une fonction qui retournera la dimension
    du tableau qu'elle recevra en argument.
    [$tableau5]
*/
echo "EX8 : ";


$tableau5 = [[0, 1, [3,[4,5,[8,8,[9]]]]],[3,[4,[5,6,[4,[4,[4,[4]]]]]]]];
function retournLadimensionTab5($tableau,$index){
    $i = 0;
    $j = 0;
    $k = 0;
   foreach($tableau as $key => $value){
        if($key == $index){
            return $tableau[$index];
        }
        $i++;
        if(is_array($value)){
            foreach($value as $key2 => $value2){
                if($key2 == $index){
                    return $tableau[$i][$index];
                } 
                $j++;   
                if(is_array($value2)){
                    foreach($value2 as $key3 => $value3){
                        if($key3 == $index){
                            return $tableau[$i][$j][$index];
                        } 
                        $k++;   
                        if(is_array($value3)){
                            foreach($value3 as $key4 => $value4){
                                if($key4 == $index){
                                    return $tableau[$i][$j][$k][$index];
                                }     
                           }
                        }
                   }
                }
           }
        }   
   }
}

echo'<pre>';
var_dump($tableau5);
echo "<br>";
echo "Tableau trouvé : ";
echo "<br>";
var_dump(retournLadimensionTab5($tableau5,3));
echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

echo "EX8 bis : ";

function retournLadimension($tableau4,$index){
    foreach($tableau4 as $key => $value){
        //echo $key." ".$index;
        if($key == $index){
            return $tableau4[$index];
        }
        if( $key == "local"){
            foreach($value as $key2 => $value2){
                if($key2 == $index){
                    return $tableau4["local"][$index];
                }
                if( $key2 == "etudiants"){
                    foreach($value2 as $key3 => $value3){
                        if($key3 == $index){
                            return $tableau4["local"]["etudiants"][$index];
                        }
                    }
                }
            }
        }
    }
    
}
$index = "etudiant6";
echo "index = ".$index;
echo'<pre>';
var_dump(retournLadimension($tableau4,$index));

echo "<br>";
echo "-----------------------------------------------------------------";
echo "<br>";

function dimension_tab($tab, $cur_dimension = 1) {
    $dimension = $cur_dimension;
    foreach ($tab as $sub_tab) {
        if (is_array($sub_tab)) {
            $dimension = max($dimension, dimension_tab($sub_tab, $cur_dimension + 1));
        }
    }
    return $dimension;
}

echo dimension_tab($tableau5);

?>
