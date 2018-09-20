<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.12.18
       
           InterestArray.php
        -->
    <title>InterestArray</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>InterestArray</h2>
    <?php
    //Array's with incrimented numbers
    $InterestRate1 = ".0725";
    $InterestRate2 = ".0750";
    $InterestRate3 = ".0775";
    $InterestRate4 = ".0800";
    $InterestRate5 = ".0825";
    $InterestRate6 = ".0850";
    $InterestRate7 = ".0875";
    $ratesArray = array("$InterestRate1", "$InterestRate2", "$InterestRate3", $InterestRate4, "$InterestRate5", "$InterestRate6", "$InterestRate7");
    //For loop to display the arrays in a number format with breaks between each line
    for($i = 0; $i < count($ratesArray); $i++) {
        echo "Interest Rate ", ($i + 1), ": ", number_format($ratesArray[$i], 4), "<br>";
    }
    ?>
</body>

</html>
