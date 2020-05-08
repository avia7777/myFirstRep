<?php

function swap(&$a, &$b){
	// echo "Swapping a = $a and b = $b\n";
	$c = $a;
	$a = $b;
	$b = $c;
}


function recQuickSort(&$arr, $i, $j){
	if ($j > $i){
		$start = $i;
		$end = $j;
		$i++;
		while ($i < $j){
			while ($arr[$i] <= $arr[$start] and $i < $end){
				$i++;
			}
			while ($arr[$j] > $arr[$start] and $j > $start){
				$j--;
			}
			if ($i < $j){
				// echo "swap arr[$i] -> $arr[$i] with arr[$j] -> $arr[$j]";
				swap($arr[$i], $arr[$j]);
				// print_r($arr);
			}
		}
		if ($arr[$start] > $arr[$j]){
			swap($arr[$start], $arr[$j]);
			// print_r($arr);
		}
		recQuickSort($arr, $start, $j-1);
		recQuickSort($arr, $j+1, $end);
	}
}


function quickSort ($arr){
	recQuickSort($arr, 0, count($arr)-1);
	return $arr;
}

$myArr = [4, 3, 6, 2, 7, 1];
print_r(quickSort($myArr));

?>