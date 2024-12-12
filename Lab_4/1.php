
<!-- WAP to create numeric array and print it -->

<html>
     <head>
  <title> Lab 4_1</title>
    </head>
          <body>
<pre>
     <?php
             $a=array(10,22,33,44,56);
			 for($i=0;$i<=count($a)-1;$i++){
			 echo $i."=>".$a[$i]."</br>";
			 }
			 echo"<hr/>";
			 
			 foreach($a as $b){
				 echo $b."</br>";
			 }
			 echo"<hr/>";
			 foreach($a as $index=>$val){
				 echo $index ."=>".$val."</br>";
			 }
			 echo "</hr>";
			 var_dump($a)."</br>";
			  echo "</hr>";
			 print_r($a);
			 
			 echo $a[1];
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>