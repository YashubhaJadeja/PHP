<!-- program for simplr calculator   -->
<html>
<head>
        <title>LAB 1_7B</title>
    </head>
    <body>
        <?php
        $x=10;
        $y= 10;
        $oprater="*";
        switch ($oprater) {
            case ("+"):
                echo "sum is :".($x+$y);
                break;
            case ("-"):
                echo "sub is :".($x-$y);
                break;
            case ("*"):
                echo "multi is :".($x*$y);
                break;
            case ("/"):
                echo "division is :".($x/$y);
                break;
                default:
                echo "Invalid oprater";
                break;

        }
        ?>
    </body>
</html>