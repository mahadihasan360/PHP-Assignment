<?php

// Result system with Grade and GPA

$marks = 80;

if($marks>=0 and $marks<=32){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: F" . "<br>" . "Your GPA: 0";

}else if($marks>=33 and $marks<=39){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: D" . "<br>" . "Your GPA: 1";

}else if($marks>=40 and $marks<=49){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: C" . "<br>" . "Your GPA: 2";

}else if($marks>=50 and $marks<=59){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: B" . "<br>" . "Your GPA: 3";

}else if($marks>=60 and $marks<=69){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: A-" . "<br>" . "Your GPA: 3.5";

}else if($marks>=70 and $marks<=79){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: A" . "<br>" . "Your GPA: 4";

}else if($marks>=80 and $marks<=100){

     echo "Your Marks: " . $marks . "<br>" . "Your Grade: A+" . "<br>" . "Your GPA: 5";

}else{
     echo "$marks is invalid Marks";
}