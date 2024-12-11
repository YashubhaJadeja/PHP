<!-- program to print pattern
*  
* *  
* * *  
* * * *  
* * * * * 
    (a) -->
<html>

<head>
    <title>LAB 3_1A</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>
