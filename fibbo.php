<?php


function maximum($array){
	$result = $array[0];
	foreach ($array as $number){
		if ($result < $number){
			$result = $number;
		}
	}
	return $result;
}


// n (n-1) = n^2-n, O(n^2), n log n
//2^n, log(2^n) = n



function my_sort($array){
	$sorted_array = [];
	while (count($array)>0){
		$biggest = maximum($array);
		array_unshift($sorted_array,$biggest);
		$biggest_index = array_search($biggest, $array);
		unset($array[$biggest_index]);
	}
	return $sorted_array;
}

// $numbers = [-5, -7, 64, 32, -10, -2, 0, 7];
// print_r(my_sort($numbers));


#####
# bruteforce fibbonaci -

function fib($length){
	$a = 0;
	$b = 1;
	$result = [];
	for ($i = 0; $i < $length; $i++){
		$result[] = $a;
		$tmp = $a;
		$a = $b;
		$b = $tmp + $a;
	}
	return $result;
}


$fib_arr = [];

function rec_fib($index){
	global $fib_arr;	
	if ($index === 1) return 0;
	if ($index === 2)	return 1;
	if (array_key_exists($index, $fib_arr)){
		return $fib_arr[$index];
	}
	return (rec_fib($index-1) + rec_fib($index-2));
}

function fibTwo ($length){
	global $fib_arr;
	$result = [];
	for ($i = 1; $i <= $length; $i++){
		$res = rec_fib($i);
		$result[] = $res;
		$fib_arr[$i] = $res;
	}
	return $result;
}


// print_r(fib(10));
print_r(fibTwo(10));
