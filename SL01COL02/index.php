<?php


/**
 * Array
 */
//Array over mijzelf met info.
$sam = [
    "Sam",
    "Maijer",
    "sam@example.com"
];

/**
 * Multidimensional Array
 */
//Array over mijn groep met info over elke groepgenoot
$group = [
    $sam = [
        "Sam",
        "Maijer",
        "sam@example.com"
    ],
    $Niloyan = [
        "Niloyan",
        "Sellathurai",
        "Niloyan@example.com"
    ],
    $Fouad = [
        "Fouad",
        "Sellathurai",
        "Fouad@example.com"
    ],
    $Cedric = [
        "Cedric",
        "Heijlman",
        "Cedric@example.com"
    ]
];

/**
 * for-loop
 */
for ($i = 0; $i < count($group); $i++) {
    for ($j = 0; $j < count($group[$i]); $j++) {
        echo $group[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<br><br>";
/**
 * foreach-loop
 */
foreach ($group as $student) {
    foreach ($student as $info) {
        echo $info . " ";
    }
    echo "<br>";
}
;
/**
 * Haal de presentatie van een variabele binnen
 */