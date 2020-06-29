<?php
function tentukan_deret_geometri($arr) {
	// kode di sini
	// kode di sini
	$temp = [];
	$final =0;
	$length = count($arr);
	for ($i=0; $i < $length-1; $i++) { 
		$temp[$i] = $arr[$i+1] % $arr[$i];
		
	}
	// print_r($temp);
	$temp2 = [];
	$lengthTemp = count($temp);
	for ($j=0; $j < $lengthTemp-1; $j++) { 
		$temp2[$j] = $temp[$j+1]-$temp[$j];
		$final += $temp2[$j]; 
	}
	// echo $final;
	if($final == 0){
		return "true <br>";
	}
	else {
		return "false <br>";

	}
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>