<!doctype html>


<html>

<head>
    <!-- 
           Exercise 02_01_01
           Author: Ty Ary
           Date: 9.13.18
       
           Scope.php
        -->
    <title>PHP Scope</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Variable Scope</h2>
    <?php
   $globalVariable = "global variable";
    
    function scopeExample() {
        $localvariable = "local variable";
        echo "This is a local variable";
    }
    function globalExample() {
        global $globalVariable;
        echo "<p>This is a $globalVariable</p>";
        
    }
    
    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
    ?> 
</body>

</html>
