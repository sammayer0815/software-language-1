<?php

$names = [
    "Sam",
    "Nilo",
    "Fouad"
];

randomNameGen($names);

//Functie die een random naam uit de array $names echo't
function randomNameGen($names){
    //Dit laat een random naam zien van de array $names
    echo $names[rand(0,(count($names)-1))] . "<br>";
};

//Include de array
include_once("./array.php");

echoGroup($group);

//Functie die de groep echo't en de even getallen blauw maken
function echoGroup($group){
    for ($i = 0; $i < count($group); $i++) {
        for ($j = 0; $j < count($group[$i]); $j++) {
            if($i % 2 === 0){
                echo "<span style='color:blue;'>".$group[$i][$j]."</span> "; 
            }else {
                echo $group[$i][$j] . " ";
            }
        }
        echo "<br>";
    }
}
echo "<br>";

echoLinks($group);
//Functie die alle links echo't om vervolgens meer info van die persoon te zien
function echoLinks($group){
    for($i = 0;$i < count($group);$i++){
        $name = $group[$i][0];
        echo "<a href='info.php?name=$name'>$name</a><br>";
    };
};