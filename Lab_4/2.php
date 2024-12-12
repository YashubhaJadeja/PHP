
<!--2. WAP to create associative array and print it. -->

<html>
     <head>
  <title> Lab 4_2</title>
    </head>
          <body>
<pre>
     <?php
             $menu=array("pizza"=>40,"burgur"=>60);
			 echo"<hr/>";
			
			 
			 foreach($menu as $m =>$value){
				 echo $m."=>".$value."</br>";
			 }
			 echo"<hr/>";
			 var_dump($menu);
			 echo"<hr/>";
			 print_r($menu);
			 echo"<hr/>";
			 echo($menu["pizza"]);
			 
			  echo"<hr/>";
			  $m=array_keys($menu);
			  print_r($m);
			  
			  echo"<hr/>";
			  $value=array_values($menu);
			  print_r($value);
			   echo"<hr/>";
			   
			  for($i=0;$i<count($menu);$i++){
			  echo $m[$i]."</br>";
			  }
			  echo"<hr/>";
			  for($i=0;$i<count($menu);$i++){
			  echo $m[$i]."=>".$value[$i]."</br>";}
			  
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>