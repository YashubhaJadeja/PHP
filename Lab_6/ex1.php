
<html>
<head>
    <title> Lab extra</title>
</head>
<body>
<pre>
    <?php
       
	   $str="welcome to darshan univarsity  ";
	   
	   
	   echo strlen($str)."</br>";	  
		
		echo strtoupper($str)."</br>";
		echo strtolower($str)."</br>";
		echo ucfirst($str)."</br>";
		echo ucwords($str)."</br>";
		echo strpos($str,"darshan")."</br>";
		
		echo strpos($str,"a")."</br>";
		echo str_replace("darshan","Marwadi",$str)."</br>";
		echo substr($str,11,7)."</br>";
		echo strrev($str)."</br>";
		echo trim($str)."</br>";
		echo rtrim($str)."</br>";
		
		echo ltrim($str)."</br>";
		
		echo str_pad($str,100,"%")."</br>";
		
		echo str_repeat($str,10)."</br>";
		$array=["welcome","to","darshan","university"];
		$s=implode(" ",$array);
		echo $s."</br>";
		
		$arr=explode("t",$str);
		print_r($arr);
		
		echo str_shuffle($str)."</br>";
		echo "<hr/>";
		$str1="darshan";
		$a=str_split($str1);
		print_r($a);
		
		echo strstr($str,"Darshan");
		
		$str="<p> Welcome to <b> Darshan university</b></p>";
		$tagAllowed="<b></b>";
		$result=str
	?>
	
	
</pre>
</body>
</html>
