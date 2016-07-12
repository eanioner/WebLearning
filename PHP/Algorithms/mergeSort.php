<?php
	$arr = array(3,2,5,6,1);
	$arr = mergeSort($arr);
	printArr($arr);


	function mergeSort($arr) {
		if (count($arr) < 2) return $arr;
		
		$middle = count($arr) / 2 ^ 0;
		$left = array(); $right = array();

		for ($i = 0; $i < count($arr); $i++) 
			if ($i < $middle) $left[] = $arr[$i];	
			else $right[] = $arr[$i];
		
		$left = mergeSort($left);
		$right = mergeSort($right);
		
		$i = 0; $j = 0;
		$ans = array();
		while ($i < count($left) || $j < count($right)) {
			if ($i == count($left)) {
				$ans[] = $right[$j++];
			} else if ($j == count($right)) {
				$ans[] = $left[$i++];
			} else {
				if ($left[$i] < $right[$j]) {
					$ans[] = $left[$i++];
				} else {
					$ans[] = $right[$j++];
				}
			}
		}
		
		return $ans;
	}

	function printArr($arr) {
		for ($i = 0; $i < count($arr); $i++) {
			echo "Element $i: $arr[$i] <br />";
		}
		echo "<hr>";
	}
?> 

