<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           GasPrices.php
        -->
    <title>Gas Prices</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Gas Prices</h2>
    <?php
    //Global variable
    $gasprice = 2.6;
    //if gas prices are in between 2 and 3 tell the user its between, if not then tell them its not 2 or 3
    if ($gasprice >= 2 && $gasprice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00</p>";
    } else {
        echo "<p>Gas prices are not between $2.00 and $3.00</p>";
    }
    ?>
</body>

</html>
