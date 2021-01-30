<?php

// increments by 3 per step and breaks the auto loop when the loop finds a number divisible by 11

for($i = 1; $i<=100; $i = $i+3 ){

    if($i % 11 == 0) break;{
        echo $i . "<hr>";
    }
    
}




