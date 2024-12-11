<!-- program to calculate Electricity bill. -->
<html>
    <head>
        <title>LAB 1_8C</title>
    </head>
    <body>
        <?php
        $unit=251;
        if($unit<=50)
         {
            echo  "your total unit:" .$unit. "your total bill is :" . ($unit*3.5);
         }
         else if($unit>=51 && $unit<=150)
         {
           echo  "your total unit:" .$unit. "your total bill is :" . (($unit-50)*4)+(50*3.5);
         }
         else if($unit>= 151 && $unit<= 250)
         {
           echo "your total unit:" .$unit. "</br>your total bill is:".(($unit-150)*5.2)+((100)*4)+(50*3.5);
         }
         else
         {
            echo "your total unit:" .$unit. "</br>your total bill is:".(($unit-250)*6)+(100*5.2)+(100*4)+(50*3.5); 
         }
        ?>
    </body>
</html>