<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.12.18
       
           IsEven.php
        -->
    <title>Is Even</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Is Even</h2>
    <?php
    //Generates random numbers that are in a array
    $numbersArray = [rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100)];
    //Loops through the 10 randomly generated numbers in the array and tells the user if the number is odd or even
    for($i = 0; $i < count($numbersArray); $i++) { 
         $message = ($numbersArray[$i]%2 === 0)?" is an even number<br>":" is and odd number<br>";
         echo $numbersArray[$i] , " ", $message;
    }
    
    ?>
</body>

</html>
