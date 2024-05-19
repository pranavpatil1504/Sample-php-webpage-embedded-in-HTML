<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php sample page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1><strong>
            <?php
            echo "PHP SAMPLE WEBPAGE";
            ?>
    </h1></strong>
    <h2><br><strong>Variables in php: </strong><br>
        <?php
        //Variables in php.
        //Starts with $.
        //Variables are case-sensitive.
        //Declartion cannot start with an integer ...Always start with either alphanumerical or underscore character only.
        $name = "Sunil";
        $income = 200000;
        echo "<h5><li>This guy is $name and his salary is Rs. $income.<br>";
        echo "<h5><li>$name is a good boy.<br>";
        echo "<h5><li>$name is the real editor.</li><br>";
        ?>
    </h2>

    <h2><strong>DataTypes in php: </strong><br>
        <?php
        //String Datatype:
        $name = "Ronny";
        $friend = "Monny";
        echo "<h5><li>$name is $friend's best friend.<br></h5>";

        //Integer Datatype:
        $income1 = 455;
        $debt = -900;
        echo "<h5><li>This is $income1 of $debt.<br></h5>";

        //Boolean Datatype:
        $x = true;
        $y = false;
        echo "<h5><li>";
        echo var_dump($x);
        echo ", ";
        echo var_dump($y);
        echo ".<br>";
        echo "</h5></li>";

        //Array Datatype:
        $arr1 = array("Sunil", "Prakash", "Jatin", "Lalit", "Munna");
        echo "<h5><li>";
        echo var_dump($arr1[0]); //Its also prints the strlen i.e String Length.
        echo "<br>";
        echo "</h5></li>";
        echo "<h5><li>";
        echo var_dump($arr1[1]);
        echo "<br>";
        echo "</h5></li>";
        ?>
    </h2>
    <h2><strong><br>String Function in php: </strong><br>
        <?php
        $person = "Sonam is a good and nice Girl";
        echo "<h5><li>$person</li></h5>";

        echo "<h5><li>The Length of" . "<strong> $person</strong> is " . "<strong>" . strlen($person) . "</strong>" . "</li></h5>"; //Dot operator concates 2 or more String ...strlen(Shows the length of the String being printed also includes space and special characters.)
        
        echo "<h5><li>The Word Count of" . "<strong> $person</strong> is " . "<strong>" . str_word_count($person) . "</strong>" . "</li></h5>"; //Counts the no.of Words in the string(Not include spaces anymore).
        
        echo "<h5><li>The Reverse of" . " <strong>$person</strong> is " . "<strong>" . strrev($person) . "</strong>" . "</li></h5>"; //Reverses the String.
        
        echo "<h5><li>The Position of word good " . " is " . "<strong>" . strpos($person, "good") . "</strong>" . "</li></h5>"; //Counts the no.of Words in the string(Not include spaces anymore).
        
        echo "<h5><li>The Replaced String " . " is " . "<strong>" . str_replace("good", "bad", $person) . "</strong>" . "</li></h5>"; //Replaces the word in the present String.
        
        echo "<h5><li>" . str_repeat($person, 7) . "</h5></li>"; //Repeats the whole String as many times we wanted.
        ?>
    </h2>
    <h2><strong><br> Operators in php: </strong><br>
        <?php
        //Arithmetic Operators:
        echo "<h5>1. Arithmetic Operators</h5>";
        $a = 45;
        $b = 90;
        echo "<h5><li>The Addition of <strong>$a</strong> and <strong>$b</strong> is " . "<strong>" . $a + $b . "</strong>" . ".</li>";
        echo "<li>The Subtraction of <strong>$a</strong> and <strong>$b</strong> is " . "<strong>" . $a - $b . "</strong>" . ". <br>";
        echo "<li>The Multiplication of <strong>$a</strong> and <strong>$b</strong> is " . "<strong>" . $a * $b . "</strong>" . ". <br>";
        echo "<li>The Divison of <strong>$a</strong> and <strong>$b</strong> is " . "<strong>" . $a / $b . "</strong>" . ". <br>";
        echo "<li>The Modulo of <strong>$a</strong> and <strong>$b</strong> is " . "<strong>" . $a % $b . "</strong>" . ". <br>";
        echo "<li>The Power of <strong>$a</strong> raise to  <strong>$b</strong> is " . "<strong>" . $a ** $b . "</strong>" . ".</h5></li> <br>";

        //Assignment Operators:
        echo "<h5>2. Assignment Operators</h5>";
        $z = $a; //Calls the predefined variable.
        echo "<h5><li>For z, the value is " . "<strong>" . $z . "</strong>" . ".<br>";
        $z += 50; //Adds the present defined value with the previous defined variable.
        echo "<h5><li>For z, the value is " . "<strong>" . $z . "</strong>" . ".<br>";
        $z -= 50; //SUbtracts the present defined value with the previous defined variable.
        echo "<h5><li>For z, the value is " . "<strong>" . $z . "</strong>" . ".<br>";
        $z *= 50; //Multiplies the present defined value with the previous defined variable.
        echo "<h5><li>For z, the value is " . "<strong>" . $z . "</strong>" . ".<br>";
        $z /= 50; //Divides the present defined value with the previous defined variable.
        echo "<h5><li>For z, the value is " . "<strong>" . $z . "</strong>" . ".<br>";

        //Comparsion Operators:
        echo "<br><h5>3. Comparsion Operators</h5>";
        $p = 10;
        $q = 30;
        echo "<h5><li> $p == $q, the result is ";
        echo var_dump($p == $q);
        echo "</h5></li>";
        echo "<h5><li> $p < $q, the result is ";
        echo var_dump($p < $q);
        echo "</h5></li>";
        echo "<h5><li> $p > $q, the result is ";
        echo var_dump($p > $q);
        echo "</h5></li>";
        echo "<h5><li> $p <> $q, the result is ";
        echo var_dump($p <> $q);
        echo "</h5></li>";

        //Logical Operators:
        echo "<br><h5>3. Logical Operators</h5>";
        $m = true;
        $n = false;
        echo "<h5><li> For m and n, the result is ";
        echo var_dump($m and $n); //and operator is used
        echo "</h5></li>";
        echo "<h5><li> For m or n, the result is ";
        echo var_dump($m or $n); //or operator is used 
        echo "</h5></li>";
        echo "<h5><li> For m && n, the result is ";
        echo var_dump($m && $n);
        echo "</h5></li>";
        echo "<h5><li> For m || n, the result is ";
        echo var_dump($m || $n);
        echo "</h5></li>";
        echo "<h5><li> For !m , the result is ";
        echo var_dump(!$m); //not operator is used
        echo "</h5></li>";
        ?>
    </h2>
    <h2><strong><br> if_else loops in php: </strong><br>
        <?php
        echo "<h5>1. if else Ladder</h5>";
        $r = 69;
        $t = 80;
        echo "<h5>";
        if ($r > 78) {
            echo "$r is greater than 78.";
        } else {
            echo "$r is NOT greater than 78.";
        }
        echo "</h5>";

        echo "<br><h5>2. elseif Ladder</h5>";
        $age = 24;
        echo "<h5>";
        if ($age < 25) {
            echo "You can't Drive.";
        } elseif ($age >= 25 && $age <= 65) {
            echo "You should Drive.";
        } else {
            echo "Your Age is out of consideration!!";
        }
        echo "</h5>";
        ?>
    </h2>
    <h2><strong><br> do while loops in php: </strong>
    <?php
    $i = "0";
    while($i<10){
        echo "<h5>The value of i is ";
        echo $i+1;
        echo "<br></h5>";
        $i +=3;
    }
    ?>


    </h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>