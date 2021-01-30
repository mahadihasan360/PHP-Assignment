<?php

// Dynamic Vaiya Apu Pragram

$name = "Aditi";
$marks = 80;
$rel = " ";



if($name == "Aditi" or $name == "Tabira" or $name == "Ruma" or $name == "Tarannam"){

    $rel = "Apu";

}else{
    $rel = "Vaiya";

}




if($marks>=80 and $marks<=100){

    echo "$name $rel Apni (A+) Peyechen";

}else if($marks>=70 and $marks<=79){

    echo "$name $rel Apni (A) Peyechen";

}else if($marks>=60 and $marks<=69){

    echo "$name $rel Apni (A-) Peyechen";

}else if($marks>=50 and $marks<=59){

    echo "$name $rel Apni (B) Peyechen";

}else if($marks>=40 and $marks<=49){

    echo "$name $rel Apni (C) Peyechen";

}else if($marks>=33 and $marks<=39){

    echo "$name $rel Apni (D) Peyechen";

}else if($marks>=0 and $marks<=32){

    echo "$name $rel Apni Fail Korechen";

}else{
    echo "Invalid Marks";
}

