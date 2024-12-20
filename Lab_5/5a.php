
<html>
<head>
    <title>Sum of Odd Elements</title>
</head>
<body>
<pre>
    <?php
       
	   $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
		$sum=0;
        odd($a);
	   
	   
function odd($a){	$sum=0;
	for($i=0;$i<count($a);$i++){
		  if($a[$i]%2!=0)
			  $sum += $a[$i];
	  }
	  echo "The sum of all odd elements in the array is: " . $sum;
}
     
        

      
	  
	  
    ?>
	
</pre>
</body>
</html>
