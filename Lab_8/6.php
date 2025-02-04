<html>
    <head>
        <title>lab-8</title> 
</head>
<body>
    <?php
    //wap to create a PHP program that reads the csv file and display the data in a tabular form
    $file = "student.csv";
    if (file_exists($file)){
        $handle = fopen($file,"r");
        echo "<table border = '3'>";
        while ($data = fgetcsv($handle))
        {
            echo "<tr>";
            foreach ($data as $column){
                echo "<td>". htmlspecialchars($column)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    </body>
    </html>