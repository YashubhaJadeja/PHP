<!-- program to print pattern
 1 2 3 4 5 
  2 3 4 5 
   3 4 5 
    4 5 
     5 
    4 5 
   3 4 5 
  2 3 4 5 
 1 2 3 4 5
    (a) -->
    <html>

<head>
    <title>LAB 3_3C</title>
</head>

<body>
<pre>
<?php
    // Upper part of the pattern
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo " ";
        }
        for ($j = $i + 1; $j <= 5; $j++) {
            echo $j . " ";
        }
        echo "</br>";  
    }

    // Lower part of the pattern
    for ($i = 4; $i >= 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo " ";
        }
        for ($j = $i + 1; $j <= 5; $j++) {
            echo $j . " ";
        }
        echo "</br>"; 
    }



?>
</pre>
</body>

</html>