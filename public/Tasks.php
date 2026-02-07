<?php
// ===================== Task 1 =====================
echo "<h3>Task 1</h3>";
echo "Hello PHP<br><hr>";

// ===================== Task 2 =====================
echo "<h3>Task 2</h3>";
$name="Aleena Nisar";
$age=21;
$city="Peshawar";

echo "I am ".$name."<br>";
echo "My age is ".$age."<br>";
echo "And I am from ".$city."<br><hr>";

// ===================== Task 3 =====================
echo "<h3>Task 3</h3>";
$int=21;
$string="Aleena Nisar";
$Boolean=True;
$float=5.5;

var_dump($int); echo "<br>";
var_dump($string); echo "<br>";
var_dump($Boolean); echo "<br>";
var_dump($float); echo "<br><hr>";

// ===================== Task 4 =====================
echo "<h3>Task 4</h3>";
$string="PHP is Awesome";

echo "String Length:".strlen($string)."<br>";
echo "Uppercase:".strtoupper($string)."<br>";
echo "Replace:".str_replace("Awesome","powerful",$string)."<br><hr>";

// ===================== Task 5 =====================
echo "<h3>Task 5</h3>";
$isLoggedIn = false;
if ($isLoggedIn == true) {
    echo"Welcome User<br>";
}
else{
    echo "Please login first<br>";
}
echo "<hr>";

// ===================== Task 6 =====================
echo "<h3>Task 6</h3>";
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
echo "<hr>";

// ===================== Task 7 =====================
echo "<h3>Task 7</h3>";
$grade = 'B';

switch ($grade) {
    case 'A':
        echo "Excellent!<br>";
        break;
    case 'B':
        echo "Very Good!<br>";
        break;
    case 'C':
        echo "Good<br>";
        break;
    case 'D':
        echo "Needs Improvement<br>";
        break;
    case 'F':
        echo "Fail<br>";
        break;
    default:
        echo "Invalid Grade<br>";
}
echo "<hr>";

// ===================== Task 8 =====================
echo "<h3>Task 8</h3>";
$levelNumber = 9;

$result= match($levelNumber) {
    1=> "Begineer",
    2=> "Intermediate",
    3=> "Advanced",
    default => "Unkown Level"
};
echo"User Level: $result<br><hr>";

// ===================== Task 9 =====================
echo "<h3>Task 9</h3>";
echo"Numbers 1-10 using for loop<br>";
for ( $i=1 ;$i<=10;$i++){
    echo $i ."<br>";
}

echo"<br>Table#5 using While loop<br><br>";
$number=5;
$i= 1;
while ( $i<= 10){
    echo "$number x $i =" .($number*$i)."<br>";
    $i++;
}
echo "<hr>";

// ===================== Task 10 =====================
echo "<h3>Task 10</h3>";
$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$employee = [
    "id" => 101,
    "name" => "Sara",
    "department" => "IT"
];

foreach ($employee as $key => $value) {
    echo $key . " = " . $value . "<br>";
}
echo "<hr>";

// ===================== Task 11 =====================
echo "<h3>Task 11</h3>";
echo"Multi dimensional arrays<br>";
$students=[
  ["name" => "Ayesha", "marks" => 65],
  ["name" => "Sidra", "marks" => 45],
  ["name" => "Aleena", "marks" => 78],
  ["name" => "Sana", "marks" => 92],
  ["name" => "Farishta", "marks" => 61]];

foreach ($students as $student) {
    if ($student['marks'] >= 60) {
        echo $student["name"] . " scored above 60<br>";
    }
}
echo "<hr>";

// ===================== Task 12 =====================
echo "<h3>Task 12</h3>";
class Student12 {
    public $name;
    public $age;
}

$student1 = new Student12();
$student1->name = "Aleena";
$student1->age = 21;

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<hr>";

// ===================== Task 13 =====================
echo "<h3>Task 13</h3>";
class Student13 {
    public $name;
    public $age;

    // Constructor to initialize properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Create object with constructor
$student1 = new Student13("Aleena", 21);

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<hr>";

// ===================== Task 14 =====================
echo "<h3>Task 14</h3>";
// Parent class
class Person14 {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        echo "Hello, I am " . $this->name . "<br>";
    }
}

// Child class
class Student14 extends Person14 {
    public $rollNumber;

    public function __construct($name, $age, $rollNumber) {
        parent::__construct($name, $age); // Call parent constructor
        $this->rollNumber = $rollNumber;
    }
}

// Create object
$student1 = new Student14("Aleena", 21, 101);

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<br>";
echo "Roll Number: " . $student1->rollNumber . "<hr>";

// ===================== Task 15 =====================
echo "<h3>Task 15</h3>";
class Person15 {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        echo "Hello, I am " . $this->name . "<br>";
    }
}

class Student15 extends Person15 {
    public $rollNumber;

    public function __construct($name, $rollNumber) {
        parent::__construct($name);
        $this->rollNumber = $rollNumber;
    }

    // Override greet() method
    public function greet() {
        echo "Hi, I am " . $this->name . " and my roll number is " . $this->rollNumber . "<br>";
    }
}

$student1 = new Student15("Aleena", 101);
$student1->greet();
?>