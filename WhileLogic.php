<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           WhileLogic.php
        -->
    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>While Logic</h2>
    <?php
    //Global variable
    $counter = 0;
    //While the number is less than 100 set counters as a array and incriment by 1
    while($counter <= 100) {
        $numbers[] = $counter;
        ++$counter;
    }
    //for each iteration in the numbers array tell the user the number
    foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }
    ?>
</body>

</html>
