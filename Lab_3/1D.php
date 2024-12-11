<!-- program to print pattern
1  
2 2  
3 3 3  
4 4 4 4  
5 5 5 5 5  
      (c) 
    (a) -->
<html>

<head>
    <title>LAB 3_1D</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " $i";
        }
        echo "<br>";
    }
    ?>
</body>

</html>