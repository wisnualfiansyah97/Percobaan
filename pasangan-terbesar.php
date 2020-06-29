<?php
function pasangan_terbesar($angka){
// kode di sini
	$Text = (string)$angka;
	$lengthText = strlen($Text);
	$temp = [];
	for ($i=0; $i < $lengthText; $i++) { 
		$j=$i*2;
		$temp[$i] = substr($Text, $i, 2);
	}
	$max = max($temp);
	return $max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>