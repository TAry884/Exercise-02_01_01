<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.11.18
       
           Concerts.php
        -->
    <title>Concerts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    //Global array variables
    $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    $concerts[] = "Bob Dylan";
    $concerts[] = "Joan Jett";
    //Prints the amount of Concerts
    echo "The following ", count($concerts), " concerts are scheduled </p><p>";
    
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    //Prints what concerts are playing and in the order that they are playing
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
    ?>
</body>

</html>
