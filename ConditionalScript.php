<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           ConditionalScript.php
        -->
    <title>Conditional Script</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Conditional Script</h2>
    <?php
    //Global Variables
    $intVariable = 75;
    $result ="";
    //If else to see if the number is greater than 100 or less than 100
    if ($intVariable > 100){
        $result = '$initVariable is greater than 100';                    
    } else {
        $result = '$initVariable is less than or equal to 100';
    }
    //prints the outcome of the if else to the screen
    echo '<h3>$result: ' . "$result</h3>";
    ?>
</body>

</html>
