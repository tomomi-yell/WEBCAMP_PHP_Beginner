<?php
//
$colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
//
foreach($colors as $v) {
    echo "{$v} \n";
}

//
$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];
//
foreach($colors as $k => $v) {
    echo "{$k}: {$v} \n";
}
