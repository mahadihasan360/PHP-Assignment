<?php

// Create User Membership Level with switch case

$user = 9;

switch($user){

    case 0:
        echo "You Have Become A Bronze Member";
        break;

    case 3:
        echo "You Have Become A Silver Member";
        break;

    case 6:
        echo "You Have Become A Gold Member";
        break;

    case 9:
        echo "You Have Become A Crystal Member";
        break;

    case 10:
        echo "You Have Become A Diamond Member";
        break;

    case ($user>10 or $user<0):
        echo "Invalid User";
        break;

    default:
    echo "Keep trying, you are getting very close to your achievement"; 
}



