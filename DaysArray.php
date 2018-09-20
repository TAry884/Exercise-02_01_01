<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.12.18
       
           DaysArry.php
        -->
    <title>Days Arry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Days Array</h2>
    <?php
    //Array for the days of the week
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are ";
        //For loop to loop through the days and print them in order
    for($i = 0; $i < count($days); $i++) {
        //If the count of days reaches -1 then stop the loop
        if ($i !== count($days)-1) {
            echo $days[$i], ", ";
        } else {
            echo $days[$i], ".</p>";
        }
    }
    ?>
</body>

</html>
