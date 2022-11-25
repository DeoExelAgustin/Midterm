<?php
// PHP var
$var = "My variables";

//PHP echo
echo $var . '<br>';

//PHP data types
echo '<br>';
$name = "Deo Exel A. Agustin";
$age = 21;
$single = true;
$grade = 89.5;
$null = NULL;
echo "Hi! My name is " . $name . " age " . $age . " my grade is " . $grade . " my grade: " . $grade . ' - ' . ' my age: ' . $age . ' = ' .  $grade - $age;

//PHP string 
echo '<br>';
$string = "Hello world";
echo $string . '<br>';
echo 'Hello World';

//PHP numbers
echo '<br>';
is_int($grade);

//PHP math
echo '<br>';
$num = 74.4;
echo round($num);

//PHP constants
echo '<br>';
define('Bird', 'Penguin' );
echo Bird;

//PHP operators
echo '<br>';
$num1 = 15;
$num2 = 29;
echo '<br>';

echo '15 + 29 = ' . $num1 + $num2. '<br>';
echo '15 - 29 = ' . $num1 - $num2. '<br>';
echo '15 * 29 = ' . $num1 * $num2. '<br>';
echo '15 / 29 = ' . $num1 / $num2. '<br>';
echo '15 % 29 = ' . $num1 % $num2. '<br>';


//PHP if...else..if
echo '<br>';
if ($name == "Deo Exel A. Agustin") {
    echo $name;
} elseif ($age == 21){
    echo $age;
} else {
    echo 'Default';
}

//PHP switch
echo '<br>';
$birds = 'p';
switch ($birds) {
    case 'p';
        echo 'Penguin';
    break;
    case 'r';
        echo 'Rooster';
    break;

    case 'o';
        echo 'Ostrich';
    break;
    default;
        echo "me";
}

//PHP loops
echo '<br>';
$n = 0;
while($n <= 5) {
  echo "The number is: $n <br>";
  $n++;
}

//PHP functions
echo '<br>';
function message($name) {
    echo $name;
}
message('Deo Exel');



