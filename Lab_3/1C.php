<!-- program to print pattern
1  
2 3  
4 5 6  
7 8 9 10  
11 12 13 14 15
      (c) 
    (a) -->
<html>

<head>
    <title>LAB 3_1C</title>
</head>

<body>
    <?php
    $count = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " $count";
            $count++;
        }
        echo "<br>";
    }
    ?>
</body>

</html>