<?php

$name = 'Glodie';
if ($name === 'Marie') {
} else if ($name === 'Bob') {
} else if ($name === "Charles") {
} else if ($name === "Fatou") {
} else {
}
// Switch est une structure conditionnel avec une notation plus lisible pour les strings
switch($name) {
    case 'Glodie':
        echo "Il s'appelle $name";
    break;
    case 'Bob':
    break;
    case 'Charles':
    break;
    case 'Fatou':
    break;
    default:
    break;
}

switch(true) {
    case $name === 'Glodie':
        echo "Il s'appelle $name";
    break;
    case $name === 'Bob':
    break;
    case  $name === 'Charles':
    break;
    case $name === 'Fatou':
    break;
    default:
    break;
}