<?php
function tentukan_deret_aritmatika($arr) {
	// kode di sini
	$temp = [];
	$final =0;
	$length = count($arr);
	for ($i=0; $i < $length-1; $i++) { 
		$temp[$i] = $arr[$i+1] - $arr[$i];
		
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

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); //true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); //false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); //false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]); //false
?>