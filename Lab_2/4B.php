<!-- program to  find Fibonacci Series 1 to n -->
<html>
    <head>
        <title>LAB 2_4B</title>
    </head>
    <body>
    <?php
    $x=7;
    $n1 = 0;
    $n2 = 1;
    echo "Fibonacci Series: $n1, $n2";

    for ($i = 2; $i < $x; $i++) {
        $n3 = $n1 + $n2;
        echo ", $n3";
        $n1 = $n2;
        $n2 = $n3;
    }

?>
    </body>
</html>