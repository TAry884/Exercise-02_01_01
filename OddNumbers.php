<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           OddNumbers.php
        -->
    <title>Odd Numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Odd Numbers</h2>
    <?php
    //Makes odd number be a constant 100
    define("ODDNUM", 100);
    $i = 1;
    //While $i is less 100 and if $i has a remainder print it to the screen
    while ($i <= ODDNUM) {
        if ($i % 2) {
            echo "$i<bR>";    
        }
        ++$i;
    }
    ?>
</body>

</html>
