<!-- program to print First n numbers using for, while and do while loop. -->
<html>
    <head>
        <title>LAB 2_1A</title>
    </head>
    <body>
        <?php
       $x=10;
       $i=1;
       echo "THIS IS FOR LOOP</br>";
       for( $i= 1; $i<=$x; $i++ )
       {
        echo "$i ";
       }
       
       echo "</br>THIS IS WHILE LOOP</br>";
       $i=1;
       while($i<=$x){
        echo "$i ";
        $i++;
       }

       echo "<BR>THIS IS DO WHILE LOOP</BR>";
       $i= 1;
       do {
         echo "$i ";
         $i++;
       } while ($i<=$x);
       
               ?>
    </body>
</html>
