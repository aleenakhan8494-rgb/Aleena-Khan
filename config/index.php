<?php
//Task 1
echo "Hello Worls";  // echo is use to print the output on the screen.


//Task 2

$name="Aleena Nisar";
$age=21;
$city="Peshawar";

echo "A am ".$name;
echo "My age is ".$age;
echo " And I am from ".$city;


//Task 3

$int=21;
$string="Aleena Nisar";
$Boolean=True;
$float=5.5;

var_dump($int);
echo"<br>";
var_dump($string);
echo"<br>";
var_dump($Boolean);
echo"<br>";
var_dump($float);
echo"<br>";


//Task 4
$string="PHP is Awesome";

echo "String Length:".strlen($string);
echo "uppercase:".strtoupper($string);
echo "Replace:".str_replace("Awesome","powerful",$string);

//Task 5
$isLoggedIn = false;
if ($isLoggedIn == true) {
    echo"Welcome User";
}
else{
    echo "Please login first";
}

//Task 6

$marks=69;
if ($marks>=80){
    echo"Grade:A <br>";
   
}elseif ($marks>=70){
    echo "Grade:B <br>";
   
}elseif ($marks>= 60){
    echo "Grade:C <br>";
   
}else{
    echo "Grade:F <br>";
 
}





?>