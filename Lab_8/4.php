<!-- Create a webpage delete a file  from server.   -->
<html>
    <head>
        <title>LAB 8_4A</title>
    </head>
    <body>
        <?php

			$file ="data3.txt";
			
			if(file_exists($file))
			{
				if(unlink($file))
				{
						echo "{$file} is found and delete sucessfully. ";
				}
				else{
					echo "{$file} is found but not deleted sucessfully. there some error .Contact to Admin..!! ";
				}
				
				
			}
			else{
					echo"{$file} is not found. Hence Can not be deleted";
				}
			
       
               ?>
			   
			  
    </body>
</html>