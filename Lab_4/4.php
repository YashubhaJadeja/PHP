
<!-- and print it. -->

<html>
     <head>
  <title> Lab 4_4</title>
    </head>
          n<body>
<pre>
     <?php
             $students=array(
						
						array("Id"=>111,"name"=>"Yashubha"),
						array("Id"=>222,"name"=>"dhambha"));
			
			 print_r($students);
			 
			 foreach($students as $s)
			 {
				 echo $s['Id']."=".$s['name']."</br>";
			 }
			  echo"<hr/>";
			 for($i = 0; $i < count($students); $i++) 
			 { 
		 echo $students[$i]['Id'] . "=" . $students[$i]['name'] . "<br/>";
			 }
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>