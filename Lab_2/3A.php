<!-- program to  find sum of all even numbers between 1 to n -->
<html>
    <head>
        <title>LAB 2_3A</title>
    </head>
    <body>
        <?php
        $x=10;
        $sum = 0;
        for ($i = 1; $i <= $x; $i++) {
            if ($i % 2 == 0) {
                $sum = $sum + $i;
            }
        }
        echo "The sum of all even numbers between 1 and 10 is: $sum";
        ?>
    
    </body>
</html>