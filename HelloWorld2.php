<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           HelloWorld2.php
        -->
    <title>HelloWorld2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    //These are global variables
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456);
    
    echo "<p>Hello $worldVar<br></p>";
    echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from $sunVar <br>";
    echo "Hello ", $sunVar, "!<br>";
    echo "The $sunVar's core temparature is approximately ", number_format(SUN_INFO), " degrees fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    echo "The $moonVar is ", number_format(MOON_INFO), " miles in diameter</p>";
    
    echo "This is a ", $moonVar, " embedded in double quotes.<br>";
    ?>
</body>

</html>
