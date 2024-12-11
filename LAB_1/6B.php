<!-- program to check given number is palindrome or not. -->
<html>
    <head>
        <title>LAB 1_6B</title>
    </head>
    <body>
        <?php
        $x=515;       
        $o = $x;
        $r = 0;

    while ($x > 0)  
       {
              $d = $x % 10;
              $r = ($r * 10) + $d;
              $x = (int)($x / 10);
       }

        if ($o == $r)
         {
          echo "$o is a palindrome number.";
         } 
     else
       {
         echo "$o is not a palindrome number.";
       }
?>
    </body>
</html>