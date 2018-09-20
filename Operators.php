<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           Operators.php
        -->
    <title>Operators</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Operators</h2>
    <?php
    //Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo '<p>$returnValue after addition: ', $returnValue, "</p>";
    //Modulus Operators
    $x = 3;
    $y = 2.1;
    $returnValue = $x % $y;
    echo '<p>$returnValue after modulus: ', $returnValue, "</p>";
    //
    $x = "Hello ";
    $y = "World";
    $x .= $y;
    echo '<p>$returnValue after operation: ', $x, "</p>";
    ?>
</body>

</html>
