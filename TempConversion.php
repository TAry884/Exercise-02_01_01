<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           TempConversion.php
        -->
    <title>Temp Conversion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    //Global variable
    $fahrenheit = 0;
    //While loop to loop through 1 to 100 degrees fahrenheit and converts the degree to celsius and prints it to the screen for the user
    while ($fahrenheit <= 100) {
        ++$fahrenheit;
        echo "Fahrenheit is " . $fahrenheit . " and Celsius is " . number_format(($fahrenheit - 32) * (5/9), 2) . "<br>";
    }
    ?>
</body>

</html>
