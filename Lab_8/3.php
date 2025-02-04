<!-- Create a webpage which write some data into a text file and print it.   -->
<html>
    <head>
        <title>LAB 8_3A</title>
    </head>
    <body>
        <?php

			$file ="data2.txt";
			
			if(file_exists($file))
			{
				echo "{$file} is not exits "."<br/>";
				echo "{$file} is now overwritting.......... "."<br/>";
				
				$handle=fopen($file,"w+");
				fwrite($handle,"Lab * -> 3 program overrided and completed ");
				
				
				rewind($handle);
				$size=filesize($file);
				$read_data=fread($handle,$size);
				
				echo nl2br(htmlspecialchars($read_data));
				fclose($handle);
				
			}
			else {
				
				echo "{$file} is not exits "."<br/>";
				echo "{$file} is now Generated "."<br/>";
				
				$handle=fopen($file,"w+");
				fwrite($handle,"Lab * -> 3 Generated and completed ");
				
				
				rewind($handle);
				$size=filesize($file);
				$read_data=fread($handle,$size);
				
				echo nl2br(htmlspecialchars($read_data));
				fclose($handle);
				
				
				
			}
			
       
               ?>
			   
			  
    </body>
</html>