<!-- program to print pattern
* * * * *  
* * * *  
* * *  
* *  
*  
 (b) 
     
    (a) -->
<html>

<head>
    <title>LAB 3_2B</title>
</head>

<body>
    <?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>

</html>