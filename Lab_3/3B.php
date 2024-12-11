<!-- program to print pattern
    1    
   1 1   
  1 2 1  
 1 3 3 1 
1 4 6 4 1
    (a) -->
<html>
<head>
    <title>LAB 3_3B</title>
</head>

<body>
    <pre>
<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5 - $i; $j++) {
        echo " ";
    }

    $value = 1;
    for ($j = 1; $j <= $i; $j++) {
        echo $value . " ";
        $value = (int) ($value * ($i - $j) / ($j));

    }
    echo "<br>";  // Move to the next line after each row
}
?>
</pre>
</body>

</html>