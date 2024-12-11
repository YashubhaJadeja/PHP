<!-- program to print pattern
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
     
    (a) -->
<html>

<head>
    <title>LAB 3_2A</title>
</head>

<body>
    <pre>
    <?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
  
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
   
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    
    echo "</BR>";
}
?>

    </pre>
</body>

</html>