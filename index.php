<?php

echo "Hello bob's world\n";
echo "This will be fun! \n";

new PDO("localhost", "root", "");
$x = 24;
$y = 50;

function combine($x, $y){
    $a = $x + $y;
    return $a;
}

echo combine($x, $y);

?>