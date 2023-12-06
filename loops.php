<?php

//FOR LOOP
// for($x = 0; $x<10; $x++)
//     echo $x;
// echo 'number ' . $x . '<br>';


//WHILE LOOP
// $x = 1;

// while($x <= 15){
//     echo 'Number' .$x. '<br>';
//     $x++;
// }  



//do...while loop will always execute the block of code once, even if the condition is false

// $x = 6;

// do{
//     echo 'number' .$x. '<br>';
//     $x++;
// } while ($x <= 5);



/* Foreach Loop */
// $person = [
//     'first_name' => 'Brad',
//     'last_name' => 'Traversy',
//     'email' => 'brad@gmail.com',
// ];

// foreach($person as $key => $value){
//     echo "$key - $value<br>";
// }


    /*function*/
function registerUser($email){
    echo $email . ' registered';
}

//registerUser('Brad);

function sum($n1 = 5, $n2 = 5){
    return $n1 + $n2;
}

$number = sum();
echo $number;










?>



 