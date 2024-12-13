


<html>
     <head>
  <title> Lab 4_5</title>
    </head>
          <body>
<pre>
     <?php
             $array =array(1,2,3,1,2,99);
			echo "using count() : ".count($array);
			echo "<hr/>";
			
			echo "using sizeof() : ".sizeof($array);
			echo "<hr/>";
			
			echo "using array_push() : ".array_push($array,4,5);
			echo "<hr/>";
			
			echo "using array_pop() : ".array_pop($array);
			echo "<hr/>";
			
			echo "using array_shift() : ".array_shift($array);
			echo "<hr/>";
			
			echo "using array_unshift() : ".array_unshift($array,5,66,7);
			echo "<hr/>";
			
			if(in_array(6,$array)){
			echo "array element found"."</br>";
			echo "<hr/>";
			}
			else{
				
				echo "array element not found";
				echo "<hr/>";
			}
			echo "<hr/>";
			echo "using is_array() : ".is_array($array);
			echo "<hr/>";
			
			if(is_array($array)){
			echo '$array Is array '."</br>";
			echo "<hr/>";
			}
			else{
				
				echo '$array is not array';
				echo "<hr/>";
			}
			
			
			echo "using array_product() : ".array_product($array);
			echo "<hr/>";
			
			echo "using array_sum() : ".array_sum($array);
			echo "<hr/>";
			
			echo "using min() : ".min($array);
			echo "<hr/>";
			
			echo "using max() : ".max($array);
			echo "<hr/>";
			
			echo "using shuffle() : ".shuffle($array);
			echo "<hr/>";
			
			echo "using sort() : ".sort($array);
			echo "<hr/>";
			
			echo "using rsort() : ".rsort($array);
			echo "<hr/>";
			
			
			echo "upadated array ";
			print_r($array);
			echo "<hr/>";
			
			
			echo "array using array_unique";
			print_r(array_unique($array));
			echo "<hr/>";
			
			$v=array_values($array);
			echo "values of array:";
			print_r($v);
			echo"<hr/>";
			print_r($array);
			$reverse= array_reverse($array);
			print_r($reverse);
			echo"<hr/>";
			
			$arr1 = array(1,2,3,11,4);
			$arr2 = array(11,22,3);
			
			$merge_array = array_merge($arr1,$arr2);
			echo "merge of array:";
			print_r($merge_array);
			echo"<hr/>";
			
			$diff_array = array_diff($arr2,$arr1);
			echo "diff of array:";
			print_r($diff_array);
			echo"<hr/>";
	?>
	 </pre>
          </body>																																																																																																																																																																																																																	
</html>