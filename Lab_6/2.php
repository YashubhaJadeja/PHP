
<html>
<head>
    <title> Lab 6_2</title>
</head>
<body>
<pre>
    <?php
       
	   function factorial($n){
		 if($n<=1){
			 return 1;
		 }else{
			 return $n*factorial($n-1);
			 
		 }
		 
		   
		   
	   }
      
	  echo factorial(5);
	  
    ?>
	
</pre>
</body>
</html>
