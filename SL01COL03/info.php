<?php

//Checkt of de persoon is gekomen met een GET link, zo niet stuurt hij hem terug naar de index
if(isset($_GET["name"])){
    include_once("./array.php");
    displayInfo($_GET["name"], $group);
}else{
    //Stuurt persoon terug naar index
    header("Location: index.php");
}


//Functie die de info van een persoon displayed
function displayInfo($name, $array){
    for($i = 0;$i < count($array);$i++){
        //Checkt waar in de array de naam staat om vervolgens daarvan alle info te laten zien.
        if($array[$i][0] == $name){
            echo "<span>";
            for($j = 0;$j < count($array[$i]);$j++){
                echo $array[$i][$j] . " ";
            }
            echo "</span><br>";
        }
    }
};