<!--Create a webpage which reads data from a text file and print it.  -->
<html>
    <head>
        <title>LAB 8_1A</title>
    </head>
    <body>
        <?php
			$file ="data.txt";
			
			if(file_exists($file)){
				
				$handle=fopen($file,"r");
				$size = filesize($file);
				rewind($handle);
				$read_data =fread($handle,$size);
				echo nl2br(htmlspecialchars($read_data));
				
				echo "<hr/>";
				echo nl2br(htmlspecialchars($read_data));
			}
			
			else{
				echo "this ($file) file is note exists";
			}
       
               ?>
    </body>
</html>