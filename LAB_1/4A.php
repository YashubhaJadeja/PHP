<!-- program to  print class of result based on percentage using switch statement (i.e. less than 40% -
> Fail, 40% to 50% -> Pass Class, 50% to 60% -> Second Class, 60% to 70% -> First Class, above 
70% -> Distinction).   -->
<html>
<head>
        <title>LAB 1_4A</title>
    </head>
    <body>
        <?php
        $percentage=85;
        switch (true) {
            case ($percentage < 40):
                echo "Fail";
                break;
            case ($percentage >= 40 && $percentage < 50):
                echo "Pass Class";
                break;
            case ($percentage >= 50 && $percentage < 60):
                echo "Second Class";
                break;
            case ($percentage >= 60 && $percentage < 70):
                echo "First Class";
                break;
            case ($percentage >= 70):
                echo "Distinction";
                break;
                default:
                echo "Invalid percentage";
                break;

        }
        ?>
    </body>
</html>