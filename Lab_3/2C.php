<!-- program to print pattern
***** 
 **** 
  *** 
   ** 
    *   
 (b) 
     
    (a) -->
<html>

<head>
    <title>LAB 3_2c</title>
</head>

<body>
    <pre>
 <?php
 for ($i = 5; $i >= 1; $i--) {
     for ($j = 1; $j <= 5 - $i; $j++) {
         echo " ";
     }
     for ($k = 1; $k <= $i; $k++) {
         echo "*";
     }
     echo "<br>";
 }
 ?>
    </pre>
</body>

</html>