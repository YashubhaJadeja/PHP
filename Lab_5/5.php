
<html>
<head>
    <title>Sum of Odd Elements</title>
</head>
<body>
<pre>
    <?php
        // Function to find the sum of all odd elements in an array
        function sumOfOddElements($arr) {
            $sum = 0;
            foreach($arr as $element) {
                if ($element % 2 != 0) {
                    $sum += $element;
                }
            }
            return $sum;
        }

        // Example array
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

        // Call the function and print the result
        $sum = sumOfOddElements($numbers);
        echo "The sum of all odd elements in the array is: " . $sum;
    ?>
</pre>
</body>
</html>
