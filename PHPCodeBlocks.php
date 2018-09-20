<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.10.18
       
           PHPCodeBlock.php
        -->
    <title>PHP Code Blocks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
       <!-- Declares a PHP code block -->
        <?php
        echo "This text is displayed using standard PHP script delimiters.<br>";
        print "Second String<br>";
        print "Third String";
        echo "<h1>This is a" , " multiple argurment string</h1>";
        print ("<h2>This is some math: " . (2 + 3) . "</h2>");
        ?>
    </p>
</body>

</html>
