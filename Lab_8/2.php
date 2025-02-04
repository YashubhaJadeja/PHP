<!--  WAP to create a PHP function that takes a file path as input and checks if the file exists. -->
<html>
    <head>
        <title>LAB 8_2A</title>
    </head>
    <body>
        <?php
			function check_fp($file)
			{
				if(file_exists($file)){
					echo "found";
					
				}
				else{
					
					echo "not found";
				}
				
			}
			$file ="data.txt";
			check_fp($file);
			
			
			
       
               ?>
			   
			   <?PHP
			   
			   $file ="data.txt";
			   $handle = fopen($file,"w");
			   if($handle){
				   fwrite($handle,"hello, this is test");
				   echo "data written to the file successfully";
				   fclose($handle);
				   
			   }
			   else {
				   echo "unable to open the file";
			   }
			   
			   
			   ?>
    </body>
</html>