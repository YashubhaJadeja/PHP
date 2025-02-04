<html>
<head>
	<title>Lab 4</title>
</head>
<body>
<h1>Number Functions</h1>
<hr>
<hr>
</br>
	<?php

#---------------------------------------	
	echo "ABS";
	echo "<br>";
	echo abs(-10);
	echo "<hr>";
#---------------------------------------
	echo "Round";
	echo "<br>";
	echo Round(50.38965);
	echo "<hr>";
#---------------------------------------
	echo "Cell";
	echo "<br>";
	echo ceil(4.6);
	echo "<hr>";
#---------------------------------------
	echo "Floor";
	echo "<br>";
	echo floor(4.6);
	echo "<hr>";
#---------------------------------------
	echo "Power";
	echo "<br>";
	echo pow(3,6);
	echo "<hr>";
#---------------------------------------
	echo "Sqrt";
	echo "<br>";
	echo Sqrt(64);
	echo "<hr>";
#---------------------------------------
	echo "Max";
	echo "<br>";
	echo max(3,6);
	echo "<hr>";
#---------------------------------------
	echo "Min";
	echo "<br>";
	echo min(4,7);
	echo "<hr>";
#---------------------------------------
	echo "Random";
	echo "<br>";
	echo rand(0,99);
	echo "<hr>";
#---------------------------------------
	echo "iS Numeric";
	echo "<br>";
	echo is_numeric("123");
	echo "<hr>";
#---------------------------------------
	echo "Number Formate";
	echo "<br>";
	echo number_format(1234567.89);
	echo "<hr>";
#---------------------------------------
	echo "Float Value";
	echo "<br>";
	echo floatval("15.89");
	echo "<hr>";
#---------------------------------------
	echo "Int Value";
	echo "<br>";
	echo intval("123.456");
	echo "<hr>";
#---------------------------------------
	echo "Is Int";
	echo "<br>";
	echo is_int(12);
	echo "<hr>";
#---------------------------------------
	echo "iS Float";
	echo "<br>";
	echo is_float(123.45);
	echo "<hr>";
#---------------------------------------
	echo "Is Nan";
	echo "<br>";
	echo is_nan(NAN);
	echo "<hr>";
#---------------------------------------
	echo "Fmod";
	echo "<br>";
	echo fmod(15,8);
	echo "<hr>";
#---------------------------------------
	echo "Dec to hexadec";
	echo "<br>";
	echo dechex(255);
	echo "<hr>";
#---------------------------------------
	echo "Dec to octa";
	echo "<br>";
	echo decoct(255);
	echo "<hr>";
#---------------------------------------
	echo "Dec to binary";
	echo "<br>";
	echo decbin(255);
	echo "<hr>";
#---------------------------------------
	echo "Hex Dec";
	echo "<br>";
	echo hexdec("ab");
	echo "<hr>";
#---------------------------------------
	echo "Oct Dec";
	echo "<br>";
	echo octdec(377);
	echo "<hr>";
#---------------------------------------
	echo "Is Infinite";
	echo "<br>";
	echo is_infinite(1/10);
	echo "<hr>";
#---------------------------------------
	echo "is Finite";
	echo "<br>";
	echo is_finite(1.5);
	echo "<hr>";
#---------------------------------------
	echo "is Null";
	echo "<br>";
	echo is_null(null);
	echo "<hr>";
#---------------------------------------
	echo "is Array";
	echo "<br>";
	echo is_array([1,2,3]);
	echo "<hr>";
#---------------------------------------
	echo "is Bool";
	echo "<br>";
	echo is_bool(true);
	echo "<hr>";
#---------------------------------------
	#echo "is Object";
	#echo "<br>";
	#echo is_object($obj);
	#echo "<hr>";
#---------------------------------------
	echo "is String";
	echo "<br>";
	echo is_string("Monank");
	echo "<hr>";
#---------------------------------------
	$var = 10;
	echo "is Set";
	echo "<br>";
	echo isset($var);
	echo "<hr>";
#---------------------------------------
	#echo "Empty";
	#echo "<br>";
	#echo empty($var);
	#echo "<hr>";
#---------------------------------------\
	#$var2=20;
	#cho "Unset";
	#echo "<br>";
	#unset($var2);
	#print_r ($Var2);
	#echo "<hr>";
#---------------------------------------
	?>


</body>
</html>