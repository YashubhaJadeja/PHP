
<!-- 3. WAP to create multidimensional array and print it. -->

<html>
     <head>
  <title> Lab 4_5</title>
    </head>
          <body>
<pre>
     <?php
             $numbers=array(10,22,33,array(50,70),80);
			
			for($i=0;$i<count($numbers);$i++){
				
				if(is_array($numbers[$i]))
				{
					
					for($j=0;$j<count($numbers[$i]);$j++){
						
						echo $numbers[$i][$j]."</br>";
					}
					
				}
				else{
					echo $numbers[$i]."</br>";
				}
				
				
			}
			 echo"<hr/>";
			 
			 foreach($numbers as $key=>$value){
				 
				 if(is_array($key)){
					 foreach($key as $k=>$v){
						 
						 echo $v."</br>";
					 }
					 
					 
				 }
				 else{
					 
					 echo $value;
				 }
				 
				 
			 }
			
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>