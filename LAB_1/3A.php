<!-- program to print name of month based on given number of month (i.e. 1 -> January, 2 -> 
February…).  -->
    <head>
        <title>LAB 1_3A</title>
    </head>
    <body>
        <?php
        $x=5;
         switch ($x) {
            case 1: echo" THIS IS JANUARY";
            break;
            case 2: echo " THIS IS FABRUARY";
            break;
            case 3: echo " THIS IS MARCH";
            break;
            case 4: echo " THIS IS APRIL";
            break;
            case 5: echo " THIS IS MAY";
            break;
            case 6: echo " THIS IS JUNE";
            break;
            case 7: echo " THIS IS JULY";
            break;
            case 8: echo " THIS IS AUGUEST";
            break;
            case 9: echo " THIS IS SEPTEMBER";
            break;
            case 10: echo " THIS IS OCTOBER";
            break;
            case 11: echo " THIS IS NOVEMBER";
            break;
            case 12: echo " THIS IS DECEMBER";
            break;
            default: echo "INVALID INPUT";
            break;
         }
        ?>
    </body>
</html>