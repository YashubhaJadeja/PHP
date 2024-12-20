
<html>
<head>
    <title> Lab 6_1</title>
</head>
<body>
<pre>
    <?php
       
	   function sum($n){
		 if($n<=1){
			 return 1;
		 }else{
			 return $n+sum($n-1);
			 
		 }
		 
		   
		   
	   }
      
	  echo sum(2);
	  
    ?>
	
</pre>
</body>
</html>
