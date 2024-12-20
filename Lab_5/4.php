
<!-- and print it. -->

<html>
     <head>
  <title> Lab 5_4</title>
    </head>
<body>
<pre>
     <?php
			$a=20;
			$b=30;

$o="/";

function add($a,$b){
	$ans=$a+$b;
	return $ans;
	
}

function sub($a,$b){
	$ans=$a-$b;
	return $ans;
}

function mul($a,$b){
	$ans=$a*$b;
	return $ans;
}

function div($a,$b){
	if($b != 0){
	$ans=$a/$b;
	return $ans;
	}else{ return "zero error";}
	
	
}

switch($o)
{
	case ("+"): 
	$ans=add($a,$b);
			echo $ans;
	break;
	
	case ("-"): 
	$ans=sub($a,$b);
			echo $ans;
	break;
	
	case ("*"): 
	$ans=mul($a,$b);
			echo $ans;
	break;
	
	case ("/"): 
	$ans=div($a,$b);
			echo $ans;
	break;
	default:
	echo "invalid oprater";
	break;
}
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>