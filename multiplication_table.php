<?php

// Using the loop, make the multiplication table of 2 3 4 and 5


echo "<h1>Two Times Multiplication Table</h1>";

for($i=1; $i<=10; $i++){

    $multiplication_table=2*$i;
    echo "2 " . "x " . $i . " = " . $multiplication_table . "<hr>";
}

echo "<h1>Three Times Multiplication Table</h1>";

for($i=1; $i<=10; $i++){

    $multiplication_table=3*$i;
    echo "3 " . "x " . $i . " = " . $multiplication_table . "<hr>";
}

echo "<h1>Four Times Multiplication Table</h1>";

for($i=1; $i<=10; $i++){

    $multiplication_table=4*$i;
    echo "4 " . "x " . $i . " = " . $multiplication_table . "<hr>";
}

echo "<h1>Five Times Multiplication Table</h1>";

for($i=1; $i<=10; $i++){

    $multiplication_table=5*$i;
    echo "5 " . "x " . $i . " = " . $multiplication_table . "<hr>";
}