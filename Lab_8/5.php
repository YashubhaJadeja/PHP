<!-- WAP to create a PHP script to count the number of lines in a text file.    -->
<html>
    <head>
        <title>LAB 8_5B</title>
    </head>
    <body>
        

			<?php
function countLine($filePath) 
{
    if (!file_exists($filePath)) 
    {
        echo "Error: File does not exist.\n";
        return 0;
    }

    $lines = file($filePath);
    $lineCount = 0;

    for ($i = 0; $i < count($lines); $i++) 
    {
        $lineCount++;
    }

    return $lineCount;
}

$filePath = "data.txt"; 

$lineCount = countLine($filePath);
echo "The file '$filePath' contains $lineCount lines.";
?>

<?php 
    
	$file ="example.txt";
			
			if(file_exists($file)){
				
				$handle=fopen($file,"r");
				$size = filesize($file);
				rewind($handle);
				$read_data =fread($handle,$size);
				echo nl2br(htmlspecialchars($read_data));
				
				$count = 0;
				
				for($i=0;$i<strlen($read_data);$i++)
				{
					if($read_data[$i]=="\n"){
						$count++;
					}
				}
				echo "<br/>"."Count : ".$count;
			}
			else{
				echo "{$file} is found";
			}



?>
			
       
              
			   
			  
    </body>
</html>