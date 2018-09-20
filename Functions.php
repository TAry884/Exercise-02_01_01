<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.13.18
       
           Functions.php
        -->
    <title>PHP Functions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Passing parameters</h2>
    <?php
    //Function to count
    function incrementByValue($countByValue) {
        ++$countByValue;
        echo "<p>IncrementByValue() value is $countByValue.</p>";
    }
    //Function to count by reference
    function incrementByReference(&$countByReference) {
        ++$countByReference;
        echo "<p>IncrementByValue() value is $countByReference.</p>";
    }
    //counts and gives the value of the counted number
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByValue($count);
    echo "<p>Main program ending value is $count.</p>";
    
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByReference($count);
    echo "<p>Main program ending value is $count.</p>";
    ?>
    //Sets a default argument for if something is not declared or if something is not met
    <h2>Default Arguments</h2>
    <?php
    function paint($room="office", $color="red") {
        return "<p>The color of the $room is $color</p>";
    }
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    ?>
</body>

</html>
