<!-- program to  find sum of first and last digit of number -->

<html>
    <head>
        <title>LAB 2_6C</title>
    </head>
    <body>
    <?php
    $x=123;

// Find the last digit
$lastDigit = $x % 10;

// Find the first digit
$firstDigit = $x; // in case of single digit number
while ($firstDigit >= 10) {
    $firstDigit = (int)($firstDigit / 10);
}

$sum = $firstDigit + $lastDigit;

echo "Sum of the first and last digit of $x is: $sum";


    ?>
    </body>
</html>